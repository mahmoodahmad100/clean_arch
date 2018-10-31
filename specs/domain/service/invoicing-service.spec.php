<?php

use CleanArch\Invoicer\Domain\Entity\Invoice;
use CleanArch\Invoicer\Domain\Entity\Order;
use CleanArch\Invoicer\Domain\Service\InvoicingService;

describe("InvoicingService", function(){
	describe("->generateInvoices()", function(){

		beforeEach(function(){
			$this->repository = $this->getProphet()->prophesize('CleanArch\Invoicer\Domain\Repository\OrderRepositoryInterface');
			$this->factory = $this->getProphet()->prophesize('CleanArch\Invoicer\Domain\Factory\InvoiceFactory');
		});

		it("should query the repository for uninvoiced Orders",function(){

			$this->repository->getUninvoicedOrders()->shouldBeCalled();

			$service = new InvoicingService(
				$this->repository->reveal(),$this->factory->reveal(),
				$this->factory->reveal()
			);

			$service->generateInvoices();
		});

		it("should return an Invoice for each uninvoiced Order", function(){

			$orders   = [(new Order())->setTotal(300)];
			$invoices = [(new Invoice())->setTotal(300)];

			$this->repository->getUninvoicedOrders()->willReturn($orders);
			$this->factory->createFromOrder($orders[0])->willReturn($invoices[0]);

			$service = new InvoicingService(
				$this->repository->reveal(),
				$this->factory->reveal()
			);

			$results = $service->generateInvoices();

			expect($results)->to->be->a('array');
			expect($results)->to->have->length(count($orders));

		});

		afterEach(function () {
			$this->getProphet()->checkPrediections();
		});
	});
});