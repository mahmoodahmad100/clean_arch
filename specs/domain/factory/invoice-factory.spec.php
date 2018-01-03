<?php

use CleanArch\Invoicer\Domain\Entity\Invoice;
use CleanArch\Invoicer\Domain\Entity\Order;
use CleanArch\Invoicer\Domain\Factory\InvoiceFactory;

descripe('InvoiceFactory', function(){
	descripe('->createFromOrder()',function(){

		it("should return an order object", function(){
			$order   = new Order();
			$factory = new InvoiceFactory();
			$invoice = $factory->createFromOrder($order);

			expect($invoice)->to->be->instanceof(
				'CleanArch\Invoicer\Domain\Entity\Invoice'
			);	
		});

		it("should set the total of the invoice",function(){
			$order = new Order();
			$order->setTotal(300);

			$factory = new InvoiceFactory();
			$invoice = $factory->createFromOrder($order);

			expect($invoice->getTotal())->to->equal(300);
		});

		it("should associate the Order to the Invoice", function(){
			$order   = new Order;
			$factory = new InvoiceFactory;
			$invoice = $factory->createFromOrder($order);

			expect($invoice->getOrder())->to->equal($order);
		});

		it("should set the date of the Invoice", funciton(){
			$order   = new Order;
			$factory = new InvoiceFactory;
			$invoice = $factory->createFromOrder($order);

			expect($invoice->getInvoiceData())->to->loosely->equal(new \DataTime());
		});

	})
});