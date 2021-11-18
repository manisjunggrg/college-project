<?php

namespace Kathford\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Kathford\Lib\Category\IsShown;
use Kathford\Lib\Status;
use Kathford\Services\common\BaseService;

/**
 * Class CategoryService
 * @package Kathford\Services
 */
class CategoryService extends BaseService
{

    /**
     * The Category instance
     *
     * @var Category $model
     */
    protected Category $model;

    /**
     * CategoryService constructor.
     * @param Category $Category
     */
    public function __construct(Category $Category)
    {
        $this->model = $Category;
    }

    /**
     * @param $filters
     * @return Collection|array
     */
    public function getCategories($filters): Collection|array
    {
        $name = Arr::get($filters, 'name');
        $slug = Arr::get($filters, 'slug');
        $is_shown = Arr::get($filters, 'is_shown');
        $status = Arr::get($filters, 'status');
        $created_at = Arr::get($filters, 'created_at');
        $start_date = Arr::get($filters, 'start_date');
        $end_date = Arr::get($filters, 'end_date');

        return $this->model
            ->with('creator:id,name')
            ->select('id', 'name', 'slug', 'status', 'is_shown', 'created_at', 'created_by', 'order')
            ->when($name, function ($query) use ($name) {
                $query->where('name', 'like', $name.'%');
            })
            ->when($slug, function ($query) use ($slug) {
                $query->where('slug', 'like', $slug.'%');
            })
            ->when($is_shown, function ($query) use ($is_shown) {
                $query->where('is_shown', $is_shown == IsShown::SHOW ? IsShown::DISPLAY : IsShown::NONE);
            })
            ->when($status, function ($query) use ($status) {
                $query->where('status', $status == Status::INACTIVE_TEXT ? Status::INACTIVE : Status::ACTIVE);
            })
            ->when($created_at, function ($query) use ($created_at) {
                $query->whereDate('created_at', $created_at);
            })
            ->when($start_date, function ($query) use ($start_date, $end_date) {
                $query->whereBetween('created_at', [$start_date, $end_date]);
            })
            ->orderBy('order')
            ->get();
    }

}
