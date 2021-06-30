@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.partials.breadcrumb',['base'=>'product','title'=>'product','panel'=>'product'])
                    <div class="ibox-content">
                    {!! Form::model($data['product'], ['route' => [$base['base_route'].'.update',$data['product']->id ],
                             'method' => 'put']) !!}
                         {!! Form::hidden('id', $data['product']->id) !!}
                        @includeIf($base['partial'].'.form')
                     {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
