<div class="card card-primary">
    <div class="card-header  with-border"><h3 class="card-title">{{ trans("crud-generator::fields/admin_lang.extra_options") }} - Texto</h3></div>
    <div class="card-body">
        <div class="form-group row">
            {!! Form::label('is_multilang', trans('crud-generator::fields/admin_lang.is_multilang'), array('class' => 'col-sm-2 control-label', 'readonly' => true)) !!}
            <div class="col-md-10">
                <div class="form-check form-check-inline">
                    {!! Form::radio('is_multilang', '0', true, array('id'=>'is_multilang_0', 'class' => 'form-check-input')) !!}
                    {!! Form::label('is_multilang_0', trans('general/admin_lang.no'), ['class' =>'form-check-label']) !!}
                </div>
                <div class="form-check form-check-inline">
                    {!! Form::radio('is_multilang', '1', false, array('id'=>'is_multilang_1', 'class' =>'form-check-input')) !!}
                    {!! Form::label('is_multilang_1', trans('general/admin_lang.yes'), ['class' =>'form-check-label']) !!}
                </div>
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('min_length', trans('crud-generator::fields/admin_lang.min_length'), array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                {!! Form::text('min_length', null,
                    array('placeholder' => trans('crud-generator::fields/admin_lang.min_length'),
                    'class' => 'form-control input-xlarge',
                    'id' => 'min_length')) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('max_length', trans('crud-generator::fields/admin_lang.max_length'), array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                {!! Form::text('max_length', null,
                    array('placeholder' => trans('crud-generator::fields/admin_lang.max_length'),
                    'class' => 'form-control input-xlarge',
                    'id' => 'max_length')) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('default_value', trans('crud-generator::fields/admin_lang.default_value'), array('class' => 'col-sm-2 control-label')) !!}
            <div class="col-sm-10">
                {!! Form::text('default_value', null,
                    array('placeholder' => trans('crud-generator::fields/admin_lang.default_value'),
                    'class' => 'form-control input-xlarge',
                    'id' => 'default_value')) !!}
            </div>
        </div>
    </div>
</div>
