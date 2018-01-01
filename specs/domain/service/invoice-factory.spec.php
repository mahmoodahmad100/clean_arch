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
	})
});