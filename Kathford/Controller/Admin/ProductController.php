<?php

namespace Kathford\Controller\Admin;
use Exception;
use Kathford\Entities\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kathford\Services\ProductService;

class ProductController extends Controller
{

    protected $productService;
    protected $view_path = 'admin.product';
    protected $model;

    public function __construct( ProductService $productService)
    {
        $this->productService = $productService;
        $this->model = new Product();
    }

     /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Application|Factory|View
      */

    public function index(Request $request)
    {
       $data = [];
         $data['rows'] = $this->model->
            where(function ($query) use ($request){

                if($request->has('filter_name') && $request->get('filter_name')){
                    $query->where('product.name','like','%'.$request->get('filter_name').'%');
                }

                if($request->has('filter_email') && $request->get('filter_email')){
                    $query->where('product.email', 'like', '%'. $request->get('filter_email'). '%');
                }

                if($request->has('filter_message') && $request->get('filter_message')){
                    $query->where('product.message', 'like', '%'.$request->get('filter_message').'%');
                }

                if($request->has('filter_created_at') && $request->get('filter_created_at')){
                    $query->where('product.created_at', 'like', '%'.$request->get('filter_created_at').'%');
                }

               if ($request->has('filter_status') && $request->get('filter_status') && $request->get('filter_status') !== 'all') {
                   $query->where('product.status', $request->get('filter_status') == 'seen' ? 1 : 0);
               }

           })->latest()
           ->paginate(10);

      return view($this->view_path.'.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */

    public function create()
    {
        return view($this->view_path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  Product  $id
     * @return Application|Factory|View
     */

    public function show(Product $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $id
     * @return Application|Factory|View
     */

    public function edit(Product $id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $id
     * @return void
     */

    public function update(Request $request, Product $id)
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
