<?php
namespace Jktravis\FbstatusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="action")
 */
class Action
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
	protected $action;

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
	 * Set action
	 *
	 * @param string $action
	 * @return Action
	 */
	public function setAction($action)
	{
		$this->action = $action;

		return $this;
	}

	/**
	 * Get action
	 *
	 * @return string
	 */
	public function getAction()
	{
		return $this->action;
	}
}
