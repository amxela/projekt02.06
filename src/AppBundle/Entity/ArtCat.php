<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtCat
 *
 * @ORM\Table(name="art_cat")
 * @ORM\Entity
 */
class ArtCat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="art_cat_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artCatId;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_id", type="bigint", nullable=false)
     */
    private $artId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cat_id", type="bigint", nullable=false)
     */
    private $catId;



    /**
     * Get artCatId
     *
     * @return integer
     */
    public function getArtCatId()
    {
        return $this->artCatId;
    }

    /**
     * Set artId
     *
     * @param integer $artId
     *
     * @return ArtCat
     */
    public function setArtId($artId)
    {
        $this->artId = $artId;

        return $this;
    }

    /**
     * Get artId
     *
     * @return integer
     */
    public function getArtId()
    {
        return $this->artId;
    }

    /**
     * Set catId
     *
     * @param integer $catId
     *
     * @return ArtCat
     */
    public function setCatId($catId)
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * Get catId
     *
     * @return integer
     */
    public function getCatId()
    {
        return $this->catId;
    }
}
