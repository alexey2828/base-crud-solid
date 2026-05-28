<?php

return [
    'car' => [
        'model' => App\Models\Car::class,
        'repository' => App\Contracts\Repositories\CarRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'codeRFID' => 'nullable|string|max:50|unique:car',
            'maxV' => 'required|numeric|min:0|max:500'
        ],
    ],
    'bsu' => [
        'model' => App\Models\Bsu::class,
        'repository' => App\Contracts\Repositories\BsuRepositoryInterface::class,
        'validation' => [
            'codePlant' => 'required|string|max:50',
            'code' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'vMixer' => 'required|numeric|min:0',
            'isWork' => 'boolean'
        ],
    ],
    'customer' => [
        'model' => App\Models\Customer::class,
        'repository' => App\Contracts\Repositories\CustomerRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:500',
            'comment' => 'nullable|string'
        ],
    ],
    'driver' => [
        'model' => App\Models\Driver::class,
        'repository' => App\Contracts\Repositories\DriverRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'codeRFID' => 'nullable|string|max:50|unique:driver',
            'comment' => 'nullable|string'
        ],
    ],
    'order' => [
        'model' => App\Models\Order::class,
        'repository' => App\Contracts\Repositories\OrderRepositoryInterface::class,
        'validation' => [
            'customer_id' => 'required|exists:customer,id',
            'status' => 'required|string'
        ],
    ],
    'comp' => [
        'model' => App\Models\Comp::class,
        'repository' => App\Contracts\Repositories\CompRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255'
        ],
    ],
    'compmain' => [
        'model' => App\Models\Compmain::class,
        'repository' => App\Contracts\Repositories\CompmainRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:compmain'
        ],
    ],
    'consumptioncomponentweight' => [
        'model' => App\Models\Consumptioncomponentweight::class,
        'repository' => App\Contracts\Repositories\ConsumptioncomponentweightRepositoryInterface::class,
        'validation' => [
            'date' => 'required|date',
            'code' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'silCemCode' => 'required|string|max:255'
        ],
    ],
    'currentcomponentweight' => [
        'model' => App\Models\Currentcomponentweight::class,
        'repository' => App\Contracts\Repositories\CurrentcomponentweightRepositoryInterface::class,
        'validation' => [
            'date' => 'required|date',
            'weight' => 'required|numeric',
            'code' => 'required|string|max:255',
            'bsuCode' => 'required|string|max:255',
            'silCemCode' => 'required|string|max:255',
            'deltaWeight' => 'required|numeric',
            'isIncreased' => 'required|boolean'
        ],
    ],
    'plants' => [
        'model' => App\Models\Plant::class,
        'repository' => App\Contracts\Repositories\PlantRepositoryInterface::class,
        'validation' => [
            'codePlant' => 'required|string|max:255|unique:plants',
            'name' => 'required|string|max:255',
            'comment' => 'required|string'
        ],
    ],
    'product' => [
        'model' => App\Models\Product::class,
        'repository' => App\Contracts\Repositories\ProductRepositoryInterface::class,
        'validation' => [
            'dateStart' => 'required|string|max:255',
            'timeEnd' => 'required|string|max:255',
            'vProduct' => 'required|string|max:255',
            'loopNumber' => 'required|string|max:255',
            'vLoop' => 'required|string|max:255',
            'driver' => 'required|string|max:255',
            'car' => 'required|string|max:255',
            'classRecipe' => 'required|string|max:255',
            'nameRecipe' => 'required|string|max:255',
            'recipe' => 'required|string|max:255',
            'idTtn' => 'required|string|max:255',
            'timeStart' => 'required|string|max:255',
            'num_loop' => 'required|string|max:255',
            'idPlant' => 'required|string|max:255',
            'indProduct' => 'required|string|max:255'
        ],
    ],
    'reccomment' => [
        'model' => App\Models\Reccomment::class,
        'repository' => App\Contracts\Repositories\ReccommentRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255'
        ],
    ],
    'recfrost' => [
        'model' => App\Models\Recfrost::class,
        'repository' => App\Contracts\Repositories\RecfrostRepositoryInterface::class,
        'validation' => [
            'code' => 'required|string|max:255|unique:recfrost',
            'name' => 'required|string|max:255'
        ],
    ],
    'recipe' => [
        'model' => App\Models\Recipe::class,
        'repository' => App\Contracts\Repositories\RecipeRepositoryInterface::class,
        'validation' => [
            'code' => 'required|string|max:255|unique:recipe',
            'name' => 'required|string|max:255',
            'mixt' => 'required|string|max:255',
            'strength' => 'required|string|max:255',
            'mobil' => 'required|string|max:255',
            'frost' => 'required|string|max:255',
            'water' => 'required|string|max:255',
            'marka' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'classRecipe' => 'required|string|max:255',
            'recipeParam' => 'required|string|max:255',
            'comment' => 'required|string'
        ],
    ],
    'recipestate' => [
        'model' => App\Models\Recipestate::class,
        'repository' => App\Contracts\Repositories\RecipestateRepositoryInterface::class,
        'validation' => [
            'state' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'codeBsu' => 'required|string|max:255'
        ],
    ],
    'recmarka' => [
        'model' => App\Models\Recmarka::class,
        'repository' => App\Contracts\Repositories\RecmarkaRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:recmarka'
        ],
    ],
    'recmobility' => [
        'model' => App\Models\Recmobility::class,
        'repository' => App\Contracts\Repositories\RecmobilityRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:recmobility'
        ],
    ],
    'recstrength' => [
        'model' => App\Models\Recstrength::class,
        'repository' => App\Contracts\Repositories\RecstrengthRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:recstrength'
        ],
    ],
    'recwat' => [
        'model' => App\Models\Recwat::class,
        'repository' => App\Contracts\Repositories\RecwatRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:recwat'
        ],
    ],
    'recmobility' => [
        'model' => App\Models\Recmobility::class,
        'repository' => App\Contracts\Repositories\RecmobilityRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:recmobility'
        ],
    ],
    'mainstate' => [
        'model' => App\Models\Mainstate::class,
        'repository' => App\Contracts\Repositories\MainstateRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:mainstate',
            'options' => 'required|string',
            'entityName' => 'required|string|max:255',
            'isPause' => 'required|boolean'
        ],
    ],
    'mixture' => [
        'model' => App\Models\Mixture::class,
        'repository' => App\Contracts\Repositories\MixtureRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255'
        ],
    ],
    'order_state' => [
        'model' => App\Models\OrderState::class,
        'repository' => App\Contracts\Repositories\OrderStateRepositoryInterface::class,
        'validation' => [
            'name' => 'required|string|max:255'
        ],
    ],
    'classcomponent' => [
        'model' => App\Models\Classcomponent::class,
        'repository' => App\Contracts\Repositories\ClasscomponentRepositoryInterface::class,
        'validation' => [
            'code' => 'required|string|max:50|unique:classcomponent',
            'name' => 'required|string|max:255',
            'shortName' => 'required|string|max:255'
        ],
    ],
];
