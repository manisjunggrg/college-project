@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.partials.breadcrumb',['base'=>'product','title'=>'product','panel'=>'product'])
                    <div class="ibox-content">
                         {!! Form::open(['route' => 'admin.product.store', 'method' => 'post']) !!}
                            @includeIf('admin.product.includes.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
