<?php

namespace CleanArch\Invoicer\Domain\Entity;

class Invoice extends AbstractEntity
{
	/**
	 * the order
	 *
	 * @var object
	 */
	protected $order;

	/**
	 * the date of the invoice
	 *
	 * @var \DateTime
	 */
	protected $invoiceDate;

	/**
	 * the total cost
	 *
	 * @var int
	 */
	protected $total;

	/**
	 * get the order
	 *
	 * @return object
	 */
	public function getOrder()
	{
		return $this->order;
	}

	/**
	 * set the order
	 *
	 * @param object $order
	 */
	public function setOrder(Order $order)
	{
		$this->order = $order;
		return $this;
	}

	/**
	 * get the the date of the invoice
	 *
	 * @return \DateTime
	 */
	public function getInvoiceData()
	{
		return $this->invoiceDate;
	}

	/**
	 * set the the date of the invoice
	 *
	 * @param \DateTime $invoiceDate
	 */
	public function setInvoiceDate(\DateTime $invoiceDate)
	{
		$this->invoiceDate = $invoiceDate;
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
	 * set the the total
	 *
	 * @param int $total
	 */
	public function setTotal($total)
	{
		$this->total = $total;
		return $this;
	}
}
