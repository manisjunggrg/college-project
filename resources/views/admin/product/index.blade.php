@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="ibox ">

                @include('admin.layouts.partials.breadcrumb',['base'=>'product','title'=>'product','panel'=>'product'])
                {{--     @include('flash::message') --}}

                @include('admin.product.partials.filter-form')
                {{--  @include('admin.product.includes.table') --}}

            </div>
        </div>
    </div>
@endsection