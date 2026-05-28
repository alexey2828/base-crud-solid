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
];
