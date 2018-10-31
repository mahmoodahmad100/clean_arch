<?php

namespace CleanArch\Invoicer\Domain\Entity;

class Order extends AbstractEntity
{
	/**
	 * the customer
	 *
	 * @var object
	 */
	protected $customer;

	/**
	 * the order number
	 *
	 * @var int
	 */
	protected $orderNumber;

	/**
	 * the description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * the total
	 *
	 * @var int
	 */
	protected $total;

	/**
	 * get the customer
	 *
	 * @return object
	 */
	public function getCustomer()
	{
		return $this->customer;
	}

	/**
	 * set the customer
	 *
	 * @param object $customer
	 */
	public function setCustomer($customer)
	{
		$this->customer = $customer;
		return $this;
	}

	/**
	 * get the order number
	 *
	 * @return int
	 */
	public function getOrderNumber()
	{
		return $this->orderNumber;
	}

	/**
	 * set the order number
	 *
	 * @param int $orderNumber
	 */
	public function setOrderNumber($orderNumber)
	{
		$this->orderNumber = $orderNumber;
		return $this;
	}

	/**
	 * get the description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * set the description
	 *
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * get the grand total
	 *
	 * @return int
	 */
	public function getTotal()
	{
		return $this->total;
	}

	/**
	 * set the total
	 *
	 * @param string $total
	 */
	public function setTotal($total)
	{
		$this->total = $total;
		return $this;
	}
}