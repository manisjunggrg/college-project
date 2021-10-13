<div class="ibox-content">
    <form action="#" id="filter-form">
        <div class="row" id="filter-form">

            <div class="col-sm-3 b-r">
                <div class="form-group"><label>ID</label>
                    <input type="text" name="filter_id" placeholder="Enter ID"
                           class="form-control" value="{{ request()->get('filter_id') }}">
                </div>
                <div class="form-group"><label>Name</label>
                    <input type="text" name="filter_name" placeholder="Enter Name"
                           class="form-control" value="{{ request()->get('filter_name') }}">
                </div>
            </div>

            <div class="col-sm-3 b-r">
                <div class="form-group"><label>Slug</label>
                    <input type="text" name="filter_slug"placeholder="Enter Slug"
                           class="form-control" value="{{ request()->get('filter_slug') }}">
                </div>
                <div class="form-group"><label>Address</label>
                    <input type="text" name="filter_address"placeholder="Enter Address"
                           class="form-control" value="{{ request()->get('filter_address') }}">
                </div>
            </div>

            <div class="col-sm-3 b-r">
                <div class="form-group"><label>Principal</label>
                    <input type="text" name="filter_principal" placeholder="Enter Principal"
                           class="form-control" value="{{ request()->get('filter_principal') }}">
                </div>
                <div class="form-group"><label>Phone</label>
                    <input type="text" name="filter_phone"placeholder="Enter Phone"
                           class="form-control" value="{{ request()->get('filter_phone') }}">
                </div>
            </div>

            <div class="col-sm-3 b-r">
                <div class="form-group"><label>Status</label>
                    {!! Form::select('filter_status', [1 => 'Active', 0 => 'Inactive'],
                    (request()->has('filter_status'))?(request()->get('filter_status')):null,
                    ['class' => 'form-control', 'id' => 'filter_status']) !!}
                </div>
            </div>

        </div>
        <div class="mt-3">
            <button id="filter-btn" class="btn btn-sm btn-primary float-right m-t-n-xs"
                    type="submit"><strong>Filter</strong></button>
        </div>
    </form>

    {{--  @include('admin.product.includes.table') --}}

</div>