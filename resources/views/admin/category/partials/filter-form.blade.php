<div class="ibox-content" class="container-fluid d-flex flex-stack">
    <form action="{{ route('admin.category.index') }}" method="get" id="filter-form">
        <div class="row" id="filter-form">

            <div class="col-sm-3 b-r">
                <div class="form-group"><b>Name</b>
                    {!! Form::text('filter[name]', $data['filter']['name'] ?? null, ['class' => 'form-control', 'placeholder' => 'Enter name']) !!}
                </div>
            </div>

            <div class="col-sm-3 b-r">
                <div class="form-group"><b>Slug</b>
                    {!! Form::text('filter[slug]', $data['filter']['slug'] ?? null, ['class' => 'form-control', 'placeholder' => 'Enter Slug']) !!}
                </div>
            </div>

            <div class="col-sm-3 b-r">
                <div class="form-group"><b>Is Shown</b>
                    {!! Form::select('filter[is_shown]', \Kathford\Lib\Category\IsShown::$current, $data['filter']['is_shown'] ?? null, ['class' => 'form-control', 'placeholder' => 'Select One']) !!}
                </div>
            </div>

            <div class="col-sm-3 b-r">
                <div class="form-group"><b>Status</b>
                    {!! Form::select('filter[status]', [1 => 'Active', \Kathford\Lib\Status::INACTIVE_TEXT => 'Inactive'], $data['filter']['status'] ?? null, ['class' => 'form-control', 'placeholder' => 'Select One']) !!}
                </div>
            </div>

            <div class="col-5 b-r mt-5">
                <div class="form-group" >
                    <b>Creation Date</b>
                   <div style="display: flex">
                       {!! Form::date('filter[start_date]', $data['filter']['start_date'] ?? null, ['class' => 'form-control', 'placeholder' => 'Select One']) !!}
                       {!! Form::date('filter[end_date]', $data['filter']['end_date'] ?? null, ['class' => 'form-control', 'placeholder' => 'Select One']) !!}
                   </div>
                </div>
            </div>

            <div class="col-sm-3 b-r mt-5">
                <div class="form-group"><b>Issue Date</b>
                    {!! Form::date('filter[created_at]', $data['filter']['created_at'] ?? null, ['class' => 'form-control', 'placeholder' => 'Select One']) !!}
                </div>
            </div>
            <div class="col-sm-3 b-r mt-12 offset-1">
                <button id="filter-btn" class="btn btn-sm btn-primary float-right m-t-n-xs" type="submit"><strong>Filter</strong></button>
                <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-danger float-left m-t-n-xs">Reset</a>
            </div>

        </div>
    </form>

    {{--  @include('admin.product.includes.table') --}}

</div>