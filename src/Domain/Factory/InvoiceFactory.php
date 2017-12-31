<?php

namespace CleanArch\Invoicer\Domain\Factory;

use CleanArch\Invoicer\Domain\Entity\Invoice;
use CleanArch\Invoicer\Domain\Entity\Order;


class InvoiceFactory
{
	public function createFromOrder(Order $order)
	{
		$invoice = new Invoice();
		$invoice->setOrder($order);
		$invoice->setInvoiceDate(new \DateTime());
		$invoice->setTotal($order->getTotal());
		return $invoice;
	}
}