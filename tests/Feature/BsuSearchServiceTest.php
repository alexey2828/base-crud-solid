<?php

use App\Contracts\Services\BsuSearchServiceInterface;

it('bsu search service is registered in container', function () {
    $service = app(BsuSearchServiceInterface::class);

    expect($service)->toBeInstanceOf(BsuSearchServiceInterface::class);
});
