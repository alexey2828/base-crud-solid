<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Repositories\ReportcurrentloopRepositoryInterface;

class ReportcurrentloopController extends BaseApiController
{
    public array $validationRules = [];

    public function __construct(ReportcurrentloopRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
