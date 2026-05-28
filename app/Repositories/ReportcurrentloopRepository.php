<?php
namespace App\Repositories;

use App\Contracts\Repositories\ReportcurrentloopRepositoryInterface;
use App\Models\Reportcurrentloop;
use Illuminate\Database\Eloquent\Collection;

class ReportcurrentloopRepository extends BaseRepository implements ReportcurrentloopRepositoryInterface
{
    public function __construct(Reportcurrentloop $model)
    {
        parent::__construct($model);
    }

    public function getAllWithSpecificFields(): Collection
    {
        return $this->model->select('id', 'vLoop', 'loopNumber', 'code', 'dispencer', 'doisingError', 'doisingErrorPersent', 'doisingKorr', 'humidityKorr', 'weightFactLoop', 'weightFactM3', 'weightRecipeLoop', 'weightRecipeM3', 'idProduct', 'indProduct', 'powerLoop')->get();
    }
}
