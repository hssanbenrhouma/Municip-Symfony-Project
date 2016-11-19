<?php

namespace sfdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * sondage
 *
 * @ORM\Table(name="sondage")
 * @ORM\Entity(repositoryClass="sfdBundle\Repository\sondageRepository")
 */
class sondage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="oui", type="integer")
     */
    private $oui=0;

    /**
     * @var int
     *
     * @ORM\Column(name="non", type="integer")
     */
    private $non=0;

    /**
     * @var int
     *
     * @ORM\Column(name="any", type="integer")
     */
    private $any=0;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return sondage
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set oui
     *
     * @param integer $oui
     *
     * @return sondage
     */
    public function setOui($oui)
    {
        $this->oui = $oui;

        return $this;
    }

    /**
     * Get oui
     *
     * @return int
     */
    public function getOui()
    {
        return $this->oui;
    }

    /**
     * Set non
     *
     * @param integer $non
     *
     * @return sondage
     */
    public function setNon($non)
    {
        $this->non = $non;

        return $this;
    }

    /**
     * Get non
     *
     * @return int
     */
    public function getNon()
    {
        return $this->non;
    }

    /**
     * Set any
     *
     * @param integer $any
     *
     * @return sondage
     */
    public function setAny($any)
    {
        $this->any = $any;

        return $this;
    }

    /**
     * Get any
     *
     * @return int
     */
    public function getAny()
    {
        return $this->any;
    }
}
