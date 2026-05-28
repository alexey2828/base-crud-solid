<?php

// App/Services/TableDataService.php

namespace App\Services;

use App\Contracts\Repositories\BsuRepositoryInterface;
use App\Contracts\Repositories\CarRepositoryInterface;
use App\Contracts\Repositories\CompRepositoryInterface;
use App\Contracts\Repositories\CustomerRepositoryInterface;
use App\Contracts\Repositories\DriverRepositoryInterface;
use App\Contracts\Repositories\MixtureRepositoryInterface;
use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Contracts\Repositories\OrderStateRepositoryInterface;
use Illuminate\Support\Collection;

class TableDataService
{
    public function __construct(
        private CarRepositoryInterface $carRepository,
        private BsuRepositoryInterface $bsuRepository,
        private CompRepositoryInterface $compRepository,
        private CustomerRepositoryInterface $customerRepository,
        private DispatcherRepositoryInterface $dispatcherRepository,
        private DriverRepositoryInterface $driverRepository,
        private MixtureRepositoryInterface $mixtureRepository,
        private OrderRepositoryInterface $orderRepository,
        private OrderStateRepositoryInterface $orderStateRepository
    ) {}

    public function getAllCars(): Collection
    {
        return $this->carRepository->getAllWithSpecificFields();
    }

    public function getAllBsu(): Collection
    {
        return $this->bsuRepository->getAllWithSpecificFields();
    }

    public function getAllComp(): Collection
    {
        return $this->compRepository->getAllWithSpecificFields();
    }

    public function getAllCustomers(): Collection
    {
        return $this->customerRepository->getAllWithSpecificFields();
    }

    public function getAllDispatchers(): Collection
    {
        return $this->dispatcherRepository->getAllWithSpecificFields();
    }

    public function getAllDrivers(): Collection
    {
        return $this->driverRepository->getAllWithSpecificFields();
    }

    public function getAllMixtures(): Collection
    {
        return $this->mixtureRepository->getAllWithSpecificFields();
    }

    public function getAllOrders(): Collection
    {
        return $this->orderRepository->getAllWithSpecificFields();
    }

    public function getAllOrderStates(): Collection
    {
        return $this->orderStateRepository->getAllWithSpecificFields();
    }

    public function getAllTablesData(): array
    {
        return [
            'cars' => $this->getAllCars(),
            'bsu' => $this->getAllBsu(),
            'comp' => $this->getAllComp(),
            'customers' => $this->getAllCustomers(),
            'dispatchers' => $this->getAllDispatchers(),
            'drivers' => $this->getAllDrivers(),
            'mixtures' => $this->getAllMixtures(),
            'orders' => $this->getAllOrders(),
            'orderStates' => $this->getAllOrderStates(),
        ];
    }
}
