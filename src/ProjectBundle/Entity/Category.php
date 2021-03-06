<?php
namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class Category
{
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	 /**
	* @ORM\Column(name="name", type="string", length=100)
	*/
	protected $name;
	
	/**
      * @ORM\OneToMany(targetEntity="Movie", mappedBy="category")
      */
	protected $movies;
	
	public function __construct()
	{
		 $this->products = new ArrayCollection();
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
	
	public function __toString()
	{
		return $this->getName();
	}

    /**
     * Add name
     *
     * @param \ProjectBundle\Entity\Movie $name
     * @return Category
     */
    public function addName(\ProjectBundle\Entity\Movie $name)
    {
        $this->name[] = $name;

        return $this;
    }

    /**
     * Remove name
     *
     * @param \ProjectBundle\Entity\Movie $name
     */
    public function removeName(\ProjectBundle\Entity\Movie $name)
    {
        $this->name->removeElement($name);
    }

    /**
     * Add movies
     *
     * @param \ProjectBundle\Entity\Movie $movies
     * @return Category
     */
    public function addMovie(\ProjectBundle\Entity\Movie $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \ProjectBundle\Entity\Movie $movies
     */
    public function removeMovie(\ProjectBundle\Entity\Movie $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }
}
