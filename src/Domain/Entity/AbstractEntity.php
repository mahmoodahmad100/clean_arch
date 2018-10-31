<?php 

namespace CleanArch\Invoicer\Domain\Entity;

abstract class AbstractEntity
{
	/**
	 * the id
	 *
	 * @var int
	 */
	protected $id;

	/**
	 * get the id
	 *
	 * @return int
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * set the id
	 *
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
}
