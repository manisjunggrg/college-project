@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="ibox ">

                @include('admin.layouts.partials.breadcrumb',['base'=>'category','title'=>'category','panel'=>'category'])
                {{--     @include('flash::message') --}}

                @include('admin.product.partials.filter-form')
                {{--  @include('admin.category.includes.table') --}}

            </div>
        </div>
    </div>
@endsection