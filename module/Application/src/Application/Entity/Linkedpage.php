<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linkedpage
 *
 * @ORM\Table(name="LinkedPage")
 * @ORM\Entity
 */
class Linkedpage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sourcePage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sourcepage;

    /**
     * @var integer
     *
     * @ORM\Column(name="destinationPage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $destinationpage;

    /**
     * @var string
     *
     * @ORM\Column(name="valueURL", type="string", length=45, nullable=true)
     */
    private $valueurl;



    /**
     * Set sourcepage
     *
     * @param integer $sourcepage
     * @return Linkedpage
     */
    public function setSourcepage($sourcepage)
    {
        $this->sourcepage = $sourcepage;

        return $this;
    }

    /**
     * Get sourcepage
     *
     * @return integer 
     */
    public function getSourcepage()
    {
        return $this->sourcepage;
    }

    /**
     * Set destinationpage
     *
     * @param integer $destinationpage
     * @return Linkedpage
     */
    public function setDestinationpage($destinationpage)
    {
        $this->destinationpage = $destinationpage;

        return $this;
    }

    /**
     * Get destinationpage
     *
     * @return integer 
     */
    public function getDestinationpage()
    {
        return $this->destinationpage;
    }

    /**
     * Set valueurl
     *
     * @param string $valueurl
     * @return Linkedpage
     */
    public function setValueurl($valueurl)
    {
        $this->valueurl = $valueurl;

        return $this;
    }

    /**
     * Get valueurl
     *
     * @return string 
     */
    public function getValueurl()
    {
        return $this->valueurl;
    }
}
