@extends('admin.layouts.master')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    @include('admin.layouts.partials.breadcrumb',['base'=>'category','title'=>'category','panel'=>'category'])
                    <div class="ibox-content">
                         {!! Form::open(['route' => 'admin.category.store', 'method' => 'post']) !!}
                            @includeIf('admin.category.includes.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
