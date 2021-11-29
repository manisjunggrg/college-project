<?php

namespace Kathford\Controller\Admin;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Kathford\Services\CategoryService;

class CategoryController extends Controller
{

    /**
     * @var CategoryService
     */
    protected CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View
     */

    public function index(Request $request)
    {
        $data = [];
        $data['filter'] = Arr::get($request, 'filter');
        $data['categories'] = $this->categoryService->getCategories($data['filter']);
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */

    public function create()
    {
        $data = [];
        $data['parent_category'] = $this->categoryService->getParentCategories();
       return view('admin.category.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|Factory|View|Response
     */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param Category $id
     * @return Application|Factory|View|Response
     */

    public function show(Category $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $id
     * @return Application|Factory|View|Response
     */

    public function edit(Category $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Category $id
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, Category $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $model
     * @return RedirectResponse
     * @throws Exception
     */

    public function destroy($model)
    {
        $model->delete();
        return redirect()->back();
    }
}
