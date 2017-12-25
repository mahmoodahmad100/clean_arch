<?php

namespace CleanArch\Invoicer\Domain\Repository;

interface OrderRepositoryInterface implements RepositoryInterface
{
	public function getUninvoicedOrders();
}