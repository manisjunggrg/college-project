<div class="container">
    <div class="row mb-5">

        <div class="col-md-4 fv-row fv-plugins-icon-container">
            <label class="required fs-5 fw-bold mb-2">Choose Parent Category</label>
            {!! Form::select('parent_category',  $data['parent_category'], null, [ 'class' => 'form-control', 'placeholder' => '-- Select Parent Category --' ]) !!}
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <div class="col-md-6 fv-row fv-plugins-icon-container">
            <label class="required fs-5 fw-bold mb-2">Last name</label>
            <input type="text" class="form-control " placeholder="" name="last-name">
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

    </div>
</div>