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
use App\Contracts\Repositories\ClassrecipeRepositoryInterface;
use App\Contracts\Repositories\ClasscomponentRepositoryInterface;
use App\Contracts\Repositories\PlantRepositoryInterface;
use App\Contracts\Repositories\ProductRepositoryInterface;
use App\Contracts\Repositories\ReccommentRepositoryInterface;
use App\Contracts\Repositories\RecfrostRepositoryInterface;
use App\Contracts\Repositories\RecipeRepositoryInterface;
use App\Contracts\Repositories\RecipestateRepositoryInterface;
use App\Contracts\Repositories\RecmarkaRepositoryInterface;
use App\Contracts\Repositories\RecmobilityRepositoryInterface;
use App\Contracts\Repositories\RecstrengthRepositoryInterface;
use App\Contracts\Repositories\RecwatRepositoryInterface;
use App\Contracts\Repositories\ReportcurrentloopRepositoryInterface;
use App\Contracts\Repositories\ReportweightmanualRepositoryInterface;
use App\Contracts\Repositories\RoleRepositoryInterface;
use App\Contracts\Repositories\SilcemRepositoryInterface;
use App\Contracts\Repositories\TtnRepositoryInterface;
use App\Contracts\Repositories\TtnstateRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Contracts\Repositories\WeightmanualRepositoryInterface;
use App\Contracts\Repositories\CompmainRepositoryInterface;
use App\Contracts\Repositories\ConsumptioncomponentweightRepositoryInterface;
use App\Contracts\Repositories\CurrentcomponentweightRepositoryInterface;
use App\Contracts\Repositories\MainstateRepositoryInterface;
use App\Contracts\Services\AnalizeServiceInterface;
use App\Models\Bsu;
use App\Models\Car;
use App\Models\Comp;
use App\Models\Customer;
use App\Models\Driver;
use App\Models\Mixture;
use App\Models\Order;
use App\Models\OrderState;
use App\Models\Dispatcher;
use App\Models\Classrecipe;
use App\Models\Classcomponent;
use App\Models\Plant;
use App\Models\Product;
use App\Models\Reccomment;
use App\Models\Recfrost;
use App\Models\Recipe;
use App\Models\Recipestate;
use App\Models\Recmarka;
use App\Models\Recmobility;
use App\Models\Recstrength;
use App\Models\Recwat;
use App\Models\Reportcurrentloop;
use App\Models\Reportweightmanual;
use App\Models\Role;
use App\Models\Silcem;
use App\Models\Ttn;
use App\Models\Ttnstate;
use App\Models\User;
use App\Models\Weightmanual;
use App\Models\Compmain;
use App\Models\Consumptioncomponentweight;
use App\Models\Currentcomponentweight;
use App\Models\Mainstate;
use App\Repositories\BsuRepository;
use App\Repositories\CarRepository;
use App\Repositories\CompRepository;
use App\Repositories\CustomerRepository;
use App\Repositories\DriverRepository;
use App\Repositories\MixtureRepository;
use App\Repositories\OrderRepository;
use App\Repositories\OrderStateRepository;
use App\Repositories\DispatcherRepository;
use App\Repositories\ClassrecipeRepository;
use App\Repositories\ClasscomponentRepository;
use App\Repositories\PlantRepository;
use App\Repositories\ProductRepository;
use App\Repositories\ReccommentRepository;
use App\Repositories\RecfrostRepository;
use App\Repositories\RecipeRepository;
use App\Repositories\RecipestateRepository;
use App\Repositories\RecmarkaRepository;
use App\Repositories\RecmobilityRepository;
use App\Repositories\RecstrengthRepository;
use App\Repositories\RecwatRepository;
use App\Repositories\ReportcurrentloopRepository;
use App\Repositories\ReportweightmanualRepository;
use App\Repositories\RoleRepository;
use App\Repositories\SilcemRepository;
use App\Repositories\TtnRepository;
use App\Repositories\TtnstateRepository;
use App\Repositories\UserRepository;
use App\Repositories\WeightmanualRepository;
use App\Repositories\CompmainRepository;
use App\Repositories\ConsumptioncomponentweightRepository;
use App\Repositories\CurrentcomponentweightRepository;
use App\Repositories\MainstateRepository;
use App\Services\AnalizeService;
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

        $this->app->bind(ClassrecipeRepository::class, function ($app) {
            return new ClassrecipeRepository($app->make(Classrecipe::class));
        });

        $this->app->bind(ClassrecipeRepositoryInterface::class, function ($app) {
            return new ClassrecipeRepository($app->make(Classrecipe::class));
        });

        $this->app->bind(ClasscomponentRepository::class, function ($app) {
            return new ClasscomponentRepository($app->make(Classcomponent::class));
        });

        $this->app->bind(ClasscomponentRepositoryInterface::class, function ($app) {
            return new ClasscomponentRepository($app->make(Classcomponent::class));
        });

        $this->app->bind(PlantRepository::class, function ($app) {
            return new PlantRepository($app->make(Plant::class));
        });

        $this->app->bind(PlantRepositoryInterface::class, function ($app) {
            return new PlantRepository($app->make(Plant::class));
        });

        $this->app->bind(ProductRepository::class, function ($app) {
            return new ProductRepository($app->make(Product::class));
        });

        $this->app->bind(ProductRepositoryInterface::class, function ($app) {
            return new ProductRepository($app->make(Product::class));
        });

        $this->app->bind(ReccommentRepository::class, function ($app) {
            return new ReccommentRepository($app->make(Reccomment::class));
        });

        $this->app->bind(ReccommentRepositoryInterface::class, function ($app) {
            return new ReccommentRepository($app->make(Reccomment::class));
        });

        $this->app->bind(RecfrostRepository::class, function ($app) {
            return new RecfrostRepository($app->make(Recfrost::class));
        });

        $this->app->bind(RecfrostRepositoryInterface::class, function ($app) {
            return new RecfrostRepository($app->make(Recfrost::class));
        });

        $this->app->bind(RecipeRepository::class, function ($app) {
            return new RecipeRepository($app->make(Recipe::class));
        });

        $this->app->bind(RecipeRepositoryInterface::class, function ($app) {
            return new RecipeRepository($app->make(Recipe::class));
        });

        $this->app->bind(RecipestateRepository::class, function ($app) {
            return new RecipestateRepository($app->make(Recipestate::class));
        });

        $this->app->bind(RecipestateRepositoryInterface::class, function ($app) {
            return new RecipestateRepository($app->make(Recipestate::class));
        });

        $this->app->bind(RecmarkaRepository::class, function ($app) {
            return new RecmarkaRepository($app->make(Recmarka::class));
        });

        $this->app->bind(RecmarkaRepositoryInterface::class, function ($app) {
            return new RecmarkaRepository($app->make(Recmarka::class));
        });

        $this->app->bind(RecmobilityRepository::class, function ($app) {
            return new RecmobilityRepository($app->make(Recmobility::class));
        });

        $this->app->bind(RecmobilityRepositoryInterface::class, function ($app) {
            return new RecmobilityRepository($app->make(Recmobility::class));
        });

        $this->app->bind(RecstrengthRepository::class, function ($app) {
            return new RecstrengthRepository($app->make(Recstrength::class));
        });

        $this->app->bind(RecstrengthRepositoryInterface::class, function ($app) {
            return new RecstrengthRepository($app->make(Recstrength::class));
        });

        $this->app->bind(RecwatRepository::class, function ($app) {
            return new RecwatRepository($app->make(Recwat::class));
        });

        $this->app->bind(RecwatRepositoryInterface::class, function ($app) {
            return new RecwatRepository($app->make(Recwat::class));
        });

        $this->app->bind(ReportcurrentloopRepository::class, function ($app) {
            return new ReportcurrentloopRepository($app->make(Reportcurrentloop::class));
        });

        $this->app->bind(ReportcurrentloopRepositoryInterface::class, function ($app) {
            return new ReportcurrentloopRepository($app->make(Reportcurrentloop::class));
        });

        $this->app->bind(ReportweightmanualRepository::class, function ($app) {
            return new ReportweightmanualRepository($app->make(Reportweightmanual::class));
        });

        $this->app->bind(ReportweightmanualRepositoryInterface::class, function ($app) {
            return new ReportweightmanualRepository($app->make(Reportweightmanual::class));
        });

        $this->app->bind(TtnRepository::class, function ($app) {
            return new TtnRepository($app->make(Ttn::class));
        });

        $this->app->bind(TtnRepositoryInterface::class, function ($app) {
            return new TtnRepository($app->make(Ttn::class));
        });

        $this->app->bind(TtnstateRepository::class, function ($app) {
            return new TtnstateRepository($app->make(Ttnstate::class));
        });

        $this->app->bind(TtnstateRepositoryInterface::class, function ($app) {
            return new TtnstateRepository($app->make(Ttnstate::class));
        });

        $this->app->bind(WeightmanualRepository::class, function ($app) {
            return new WeightmanualRepository($app->make(Weightmanual::class));
        });

        $this->app->bind(WeightmanualRepositoryInterface::class, function ($app) {
            return new WeightmanualRepository($app->make(Weightmanual::class));
        });

        $this->app->bind(UserRepository::class, function ($app) {
            return new UserRepository($app->make(User::class));
        });

        $this->app->bind(UserRepositoryInterface::class, function ($app) {
            return new UserRepository($app->make(User::class));
        });

        $this->app->bind(AnalizeServiceInterface::class, function ($app) {
            return new AnalizeService();
        });

        $this->app->bind(RoleRepository::class, function ($app) {
            return new RoleRepository($app->make(Role::class));
        });

        $this->app->bind(RoleRepositoryInterface::class, function ($app) {
            return new RoleRepository($app->make(Role::class));
        });

        $this->app->bind(SilcemRepository::class, function ($app) {
            return new SilcemRepository($app->make(Silcem::class));
        });

        $this->app->bind(SilcemRepositoryInterface::class, function ($app) {
            return new SilcemRepository($app->make(Silcem::class));
        });

        $this->app->bind(CompmainRepository::class, function ($app) {
            return new CompmainRepository($app->make(Compmain::class));
        });

        $this->app->bind(CompmainRepositoryInterface::class, function ($app) {
            return new CompmainRepository($app->make(Compmain::class));
        });

        $this->app->bind(ConsumptioncomponentweightRepository::class, function ($app) {
            return new ConsumptioncomponentweightRepository($app->make(Consumptioncomponentweight::class));
        });

        $this->app->bind(ConsumptioncomponentweightRepositoryInterface::class, function ($app) {
            return new ConsumptioncomponentweightRepository($app->make(Consumptioncomponentweight::class));
        });

        $this->app->bind(CurrentcomponentweightRepository::class, function ($app) {
            return new CurrentcomponentweightRepository($app->make(Currentcomponentweight::class));
        });

        $this->app->bind(CurrentcomponentweightRepositoryInterface::class, function ($app) {
            return new CurrentcomponentweightRepository($app->make(Currentcomponentweight::class));
        });

        $this->app->bind(MainstateRepository::class, function ($app) {
            return new MainstateRepository($app->make(Mainstate::class));
        });

        $this->app->bind(MainstateRepositoryInterface::class, function ($app) {
            return new MainstateRepository($app->make(Mainstate::class));
        });
    }
}
