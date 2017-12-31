<?php

namespace CleanArch\Invoicer\Domain\Factory;

use CleanArch\Invoicer\Domain\Entity\Invoice;
use CleanArch\Invoicer\Domain\Entity\Order;


class InvoiceFactory
{
	public function createFromOrder(Order $order)
	{
		return new Invoice();
	}
}