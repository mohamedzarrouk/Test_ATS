<?php
/**
 * Created by PhpStorm.
 * User: wiki
 * Date: 25/10/2017
 * Time: 17:40
 */

namespace ATS\TestBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Review
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conent;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $rating;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Product",inversedBy="reviews")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getConent()
    {
        return $this->conent;
    }

    /**
     * @param mixed $conent
     */
    public function setConent($conent)
    {
        $this->conent = $conent;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }


}