@extends('admin.layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">

              @include('admin.layouts.partials.breadcrumb',['base'=>'category','title'=>'category','panel'=>'category'])

                <div class="ibox-content">

                </div>
            </div>
        </div>

         @includeIf($base['partial'].'.show_table')

    </div>
@endsection

