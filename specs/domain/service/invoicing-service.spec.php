<?php

$repo = 'CleanArch\Invoicer\Domain\Repository\OrderRepositoryInterface';

describe("InvoicingService", function(){
	describe("->generateInvoices()", function(){

		beforeEach(function(){
			$this->repository = $this->getProphet()->prophesize($repo);
		});

		it("should query the repository for uninvoiced Orders",function(){
			$this->repository->getUninvoicedOrders()->shouldBeCalled();
			$service = new InvoicingService($this->repository->reveal());
			$service->generateInvoices();
		});

		afterEach(function () {
			$this->getProphet()->checkPrediections();
		});
	});
});