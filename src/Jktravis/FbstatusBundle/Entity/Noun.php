<?php
namespace Jktravis\FbstatusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="noun")
 */
class Noun
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $noun;

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
	 * Set noun
	 *
	 * @param string $noun
	 * @return Noun
	 */
	public function setNoun($noun)
	{
		$this->noun = $noun;

		return $this;
	}

	/**
	 * Get noun
	 *
	 * @return string
	 */
	public function getNoun()
	{
		return $this->noun;
	}

	/**
	 * Normalized get method across Objects
	 *
	 * @return string
	 */
	public function getElement()
	{
		return $this->getNoun();
	}
}
