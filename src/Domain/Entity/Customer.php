<?php 

namespace CleanArch\Invoicer\Domain\Entity;

class Customer extends AbstractEntity
{
	/**
	 * the name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * the email
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * get the name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * set the name
	 *
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * get the email
	 *
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * set the email
	 *
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
}