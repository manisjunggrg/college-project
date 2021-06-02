<?php

namespace Neputer\Controller\Admin;
use Exception;
use Neputer\Entities\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Services\CategoryService;

class CategoryController extends BaseController
{

    protected $categoryService;
    protected $view_path = 'admin.category';
    protected $model;

    public function __construct( CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
        $this->model = new Category();
    }

     /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View|Response
     */

    public function index(Request $request)
    {
        $data = [];
        $data['rows'] = $this->model->
        where(function ($query) use ($request) {

            if ($request->has('filter_name') && $request->get('filter_name')) {
                $query->where('category.name', 'like', '%' . $request->get('filter_name') . '%');
            }

            if ($request->has('filter_email') && $request->get('filter_email')) {
                $query->where('category.email', 'like', '%' . $request->get('filter_email') . '%');
            }

            if ($request->has('filter_message') && $request->get('filter_message')) {
                $query->where('category.message', 'like', '%' . $request->get('filter_message') . '%');
            }

            if ($request->has('filter_created_at') && $request->get('filter_created_at')) {
                $query->where('category.created_at', 'like', '%' . $request->get('filter_created_at') . '%');
            }

            if ($request->has('filter_status') && $request->get('filter_status') && $request->get('filter_status') !== 'all') {
                $query->where('category.status', $request->get('filter_status') == 'seen' ? 1 : 0);
            }

        })->latest()
            ->paginate(10);

      return view($this->view_path.'.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */

    public function create()
    {
        return view($this->view_path.'.create');
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
     * @param  Category  $id
     * @return Application|Factory|View|Response
     */

    public function show(Category $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $id
     * @return Application|Factory|View|Response
     */

    public function edit(Category $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.edit',compact('data'));
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

    public function destroy( $model )
    {
        $model->delete();
        return redirect()->back();
    }
}
