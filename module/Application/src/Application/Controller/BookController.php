<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use EPub;
use DublinCore;
use EPubChapterSplitter; 

class BookController extends AbstractActionController
{
    /**
     *
     * @return \Zend\View\Model\ModelInterface
     */
    private function getViewModel()
    {
        $acceptCriteria = array(
            'Zend\View\Model\ViewModel' => array(
                'text/html',
            ),
            'Zend\View\Model\JsonModel' => array(
                'application/json',
            )
        );

        return $this->acceptableViewModelSelector($acceptCriteria);
    }
    
    public function indexAction()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $books = $em->getRepository('Application\Entity\Book')->findAll();
        return new ViewModel(array('books' => $books));
    }
    
    public function readAction() {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $book = $em->getRepository('Application\Entity\Book')->findOneByBookNo($this->params('id'));
        return $this->getViewModel()->setVariable('book', $book);
    }
    
    public function createAction() {
        return new ViewModel();
    }
    
    public function ebookAction() {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        $book = $em->getRepository('Application\Entity\Book')->findOneByBookNo($this->params('id'));
        $content_start =
            "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n"
            . "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\"\n"
            . "    \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">\n"
            . "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n"
            . "<head>"
            . "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"
            . "<link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\" />\n"
            . "<title>".$book->getTitle()."</title>\n"
            . "</head>\n"
            . "<body>\n";
        $bookEnd = "</body>\n</html>\n";

        $ebook = new EPub();
        $ebook->setTitle($book->getTitle());
        $ebook->setIdentifier($this->url()->fromRoute('application/default',array('controller'=>'book','action'=>'read','id'=>$book->getId()), array('force_canonical' => true)), EPub::IDENTIFIER_URI);
        $ebook->setLanguage("en");
        $ebook->setDescription($book->getDescription());
        $ebook->setAuthor($book->getCreator()->getUsername(), $book->getCreator()->getUsername());
        $ebook->setPublisher("Read, Write, Explore", "http://rwe.generation-pc.net/");
        $ebook->setDate(time());
        $ebook->setRights("GPL2");
        $ebook->setSourceURL($this->url()->fromRoute('application/default',array('controller'=>'book','action'=>'read','id'=>$book->getId()), array('force_canonical' => true)));
        $ebook->addDublinCoreMetadata(DublinCore::CONTRIBUTOR, "PHP");
        $ebook->addCustomMetadata("calibre:series", "PHPePub Test books");
        $ebook->addCustomMetadata("calibre:series_index", "1");
        $cssData = "body {\n  margin-left: .5em;\n  margin-right: .5em;\n  text-align: justify;\n}\n\np {\n  font-family: serif;\n  font-size: 10pt;\n  text-align: justify;\n  text-indent: 1em;\n  margin-top: 0px;\n  margin-bottom: 1ex;\n}\n\nh1, h2 {\n  font-family: sans-serif;\n  font-style: italic;\n  text-align: center;\n  background-color: #6b879c;\n  color: white;\n  width: 100%;\n}\n\nh1 {\n    margin-bottom: 2px;\n}\n\nh2 {\n    margin-top: -2px;\n    margin-bottom: 2px;\n}\n";
        $ebook->addCSSFile("styles.css", "css1", $cssData);
        $cover = $content_start . "<h1>".$book->getTitle()."</h1>\n<h2>By: ".$book->getCreator()->getUsername()."</h2>\n" . $bookEnd;
        $ebook->addChapter("Notices", "Cover.html", $cover);
        $i = 1;
        foreach($book->getPages() as $page) {
            $chapter = $content_start . "<h1>" . $page->getTitle() . "</h1>\n" . $page->getText() . $bookEnd;
            $ebook->addChapter("Chapter {$i}: " . $page->getTitle(), "Chapter".sprintf('%03d', $i).".html", $chapter, true, EPub::EXTERNAL_REF_ADD);
            $i++;
        }
        $ebook->finalize();
        $ebook->sendBook($book->getTitle());
        exit;
    }
}
