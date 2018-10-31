<?php

namespace CleanArch\Invoicer\Domain\Repository;

interface OrderRepositoryInterface extends RepositoryInterface
{
	/**
	 * get the orders that have no invoice yet
	 *
	 * @return \CleanArch\Invoicer\Domain\Entity\Order
	 */
	public function getUninvoicedOrders();
}