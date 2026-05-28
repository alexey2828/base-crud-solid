<?php

// app/Providers/RepositoryServiceProvider.php

namespace App\Providers;

use App\Contracts\Repositories\BsuRepositoryInterface;
use App\Contracts\Repositories\CarRepositoryInterface;
use App\Contracts\Repositories\CompRepositoryInterface;
use App\Contracts\Repositories\CustomerRepositoryInterface;
use App\Contracts\Repositories\DriverRepositoryInterface;
use App\Contracts\Repositories\MixtureRepositoryInterface;
use App\Contracts\Repositories\OrderRepositoryInterface;
use App\Contracts\Repositories\OrderStateRepositoryInterface;
use App\Contracts\Repositories\DispatcherRepositoryInterface;
use App\Models\Bsu;
use App\Models\Car;
use App\Models\Comp;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Mixture;
use App\Models\Order;
use App\Models\OrderState;
use App\Models\Dispatcher;
use App\Repositories\BsuRepository;
use App\Repositories\CarRepository;
use App\Repositories\CompRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\DriverRepository;
use App\Repositories\MixtureRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderStateRepository;
use App\Repositories\DispatcherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(CarRepository::class, function ($app) {
            return new CarRepository($app->make(Car::class));
        });

        $this->app->bind(CarRepositoryInterface::class, function ($app) {
            return new CarRepository($app->make(Car::class));
        });

        $this->app->bind(BsuRepository::class, function ($app) {
            return new BsuRepository($app->make(Bsu::class));
        });

        $this->app->bind(BsuRepositoryInterface::class, function ($app) {
            return new BsuRepository($app->make(Bsu::class));
        });

        $this->app->bind(CompRepository::class, function ($app) {
            return new CompRepository($app->make(Comp::class));
        });

        $this->app->bind(CompRepositoryInterface::class, function ($app) {
            return new CompRepository($app->make(Comp::class));
        });

        $this->app->bind(CustomerRepository::class, function ($app) {
            return new CustomerRepository($app->make(Customer::class));
        });

        $this->app->bind(CustomerRepositoryInterface::class, function ($app) {
            return new CustomerRepository($app->make(Customer::class));
        });

        $this->app->bind(DriverRepository::class, function ($app) {
            return new DriverRepository($app->make(Driver::class));
        });

        $this->app->bind(DriverRepositoryInterface::class, function ($app) {
            return new DriverRepository($app->make(Driver::class));
        });

        $this->app->bind(DispatcherRepository::class, function ($app) {
            return new DispatcherRepository($app->make(Dispatcher::class));
        });

        $this->app->bind(DispatcherRepositoryInterface::class, function ($app) {
            return new DispatcherRepository($app->make(Dispatcher::class));
        });

        $this->app->bind(MixtureRepository::class, function ($app) {
            return new MixtureRepository($app->make(Mixture::class));
        });

        $this->app->bind(MixtureRepositoryInterface::class, function ($app) {
            return new MixtureRepository($app->make(Mixture::class));
        });

        $this->app->bind(OrderRepository::class, function ($app) {
            return new OrderRepository($app->make(Order::class));
        });

        $this->app->bind(OrderRepositoryInterface::class, function ($app) {
            return new OrderRepository($app->make(Order::class));
        });

        $this->app->bind(DispatcherRepository::class, function ($app) {
            return new DispatcherRepository($app->make(Dispatcher::class));
        });

        $this->app->bind(DispatcherRepositoryInterface::class, function ($app) {
            return new DispatcherRepository($app->make(Dispatcher::class));
        });
    }
}
