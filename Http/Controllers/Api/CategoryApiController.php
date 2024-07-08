<?php

namespace Modules\Itask\Http\Controllers\Api;

use Modules\Core\Icrud\Controllers\BaseCrudController;
//Model
use Modules\Itask\Entities\Category;
use Modules\Itask\Repositories\CategoryRepository;

class CategoryApiController extends BaseCrudController
{
  public $model;
  public $modelRepository;

  public function __construct(Category $model, CategoryRepository $modelRepository)
  {
    $this->model = $model;
    $this->modelRepository = $modelRepository;
  }
}
