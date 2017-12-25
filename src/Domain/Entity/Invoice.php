<?php

namespace CleanArch\Invoicer\Domain\Entity;

class Invoice extends AbstractEntity
{
	protected $order;
	protected $invoiceDate;
	protected $total;

	public function getOrder()
	{
		return $this->order;
	}

	public function setOrder(Order $order)
	{
		$this->order = $order;
		return $this;
	}

	public function getInvoiceData()
	{
		return $this->invoiceDate;
	}

	public function setInvoiceDate(\DateTime $invoiceDate);
	{
		$this->invoiceDate = $invoiceDate;
		return $this;
	}
}
