<?php

namespace CleanArch\Invoicer\Domain\Service;

use CleanArch\Invoicer\Domain\Factory\InvoiceFactory;
use CleanArch\Invoicer\Domain\Repository\OrderRepositoryInterface;

class InvoicingService 
{
	/**
	 * the order repo
	 *
	 * @var \CleanArch\Invoicer\Domain\Repository\OrderRepositoryInterface
	 */
	protected $orderRepository;

	/**
	 * the invoice factory
	 *
	 * @var \CleanArch\Invoicer\Domain\Factory\InvoiceFactory
	 */
	protected $invoiceFactory;

	/**
	 * setting up
	 *
	 * @param \CleanArch\Invoicer\Domain\Repository\OrderRepositoryInterface  $orderRepository
	 * @param \CleanArch\Invoicer\Domain\Factory\InvoiceFactory  $invoiceFactory
	 * @return void
	 */
	public function __construct(OrderRepositoryInterface $orderRepository, InvoiceFactory $invoiceFactory)
	{
		$this->orderRepository = $orderRepository;
		$this->invoiceFactory  = $invoiceFactory;
	}

	/**
	 * create invoices for the orders that have not invoices yet
	 *
	 * @return \CleanArch\Invoicer\Domain\Entity\Invoice
	 */
	public function generateInvoices()
	{
		$orders = $this->orderRepository->getUninvoicedOrders();
		$invoices = [];

		foreach($orders as $order)
		{
			$invoices[] = $this->invoiceFactory->createFromOrder($order);
		}

		return $invoices;
	}
}