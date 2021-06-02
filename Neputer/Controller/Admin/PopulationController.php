<?php

namespace Neputer\Controller\Admin;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neputer\Foundation\Request\Population\PopulationFormValidation;
use Neputer\Services\PopulationService;


class PopulationController extends BaseController
{

    protected $populationService;
    protected $view_path = 'admin.population';
    protected $model;

    public function __construct( PopulationService $populationService)
    {
        $this->populationService = $populationService;
        $this->model = new User();
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
            where(function ($query) use ($request){

                if($request->has('filter_name') && $request->get('filter_name')){
                    $query->where('population.name','like','%'.$request->get('filter_name').'%');
                }

                if($request->has('filter_email') && $request->get('filter_email')){
                    $query->where('population.email', 'like', '%'. $request->get('filter_email'). '%');
                }

                if($request->has('filter_message') && $request->get('filter_message')){
                    $query->where('population.message', 'like', '%'.$request->get('filter_message').'%');
                }

                if($request->has('filter_created_at') && $request->get('filter_created_at')){
                    $query->where('population.created_at', 'like', '%'.$request->get('filter_created_at').'%');
                }

               if ($request->has('filter_status') && $request->get('filter_status') && $request->get('filter_status') !== 'all') {
                   $query->where('population.status', $request->get('filter_status') == 'seen' ? 1 : 0);
               }

           })->latest()
           ->paginate(10);

      return view($this->view_path.'.index',compact('data'));
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
     * @param PopulationFormValidation $request
     * @return Application|Factory|View|Response
     */

    public function store(PopulationFormValidation $request)
    {
       dd($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  User $id
     * @return Application|Factory|View|Response
     */

    public function show(User$id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $id
     * @return Application|Factory|View|Response
     */

    public function edit(User$id)
    {
        $data = [];
        $data['row'] = $id;
        return view($this->view_path.'.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User$id
     * @return Application|Factory|View|Response
     */

    public function update(Request $request, User$id)
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
