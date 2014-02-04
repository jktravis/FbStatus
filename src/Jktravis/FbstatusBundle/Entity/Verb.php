<?php
namespace Jktravis\FbstatusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="verb")
 */
class Verb
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
	protected $verb;

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
	 * Set verb
	 *
	 * @param string $verb
	 * @return Verb
	 */
	public function setVerb($verb)
	{
		$this->verb = $verb;

		return $this;
	}

	/**
	 * Get verb
	 *
	 * @return string
	 */
	public function getVerb()
	{
		return $this->verb;
	}

	/**
	 * Normalized get method across Objects
	 *
	 * @return string
	 */
	public function getElement()
	{
		return $this->getVerb();
	}
}
