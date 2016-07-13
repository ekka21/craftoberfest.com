@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vendors</h3>
    {!! Form::model($vendor,['method' => 'PUT', 'route' => ['vendors.update', $vendor->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('full_name', 'Full Name', ['class' => 'control-label']) !!}
                    {!! Form::text('full_name', old('full_name'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('full_name'))
                        <p class="help-block">
                            {{ $errors->first('full_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('biz_name', 'Business Name', ['class' => 'control-label']) !!}
                    {!! Form::text('biz_name', old('biz_name'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('biz_name'))
                        <p class="help-block">
                            {{ $errors->first('biz_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', 'Email Address', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('website_1', 'Website1', ['class' => 'control-label']) !!}
                    {!! Form::text('website_1', old('website_1'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('website_1'))
                        <p class="help-block">
                            {{ $errors->first('website_1') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('website_2', 'Website2', ['class' => 'control-label']) !!}
                    {!! Form::text('website_2', old('website_2'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('website_2'))
                        <p class="help-block">
                            {{ $errors->first('website_2') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook', 'Facebook', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook', old('facebook'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook'))
                        <p class="help-block">
                            {{ $errors->first('facebook') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('Twitter', 'Twitter', ['class' => 'control-label']) !!}
                    {!! Form::text('Twitter', old('Twitter'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('Twitter'))
                        <p class="help-block">
                            {{ $errors->first('Twitter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('instagram', 'Instagram', ['class' => 'control-label']) !!}
                    {!! Form::text('instagram', old('instagram'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('instagram'))
                        <p class="help-block">
                            {{ $errors->first('instagram') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('booth_pref', 'Booth preference', ['class' => 'control-label']) !!}
                    {!! Form::text('booth_pref', old('booth_pref'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('booth_pref'))
                        <p class="help-block">
                            {{ $errors->first('booth_pref') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('paypal_email', 'Paypal Email', ['class' => 'control-label']) !!}
                    {!! Form::text('paypal_email', old('paypal_email'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('paypal_email'))
                        <p class="help-block">
                            {{ $errors->first('paypal_email') }}
                        </p>
                    @endif
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('prod_desc', 'Product Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('prod_desc', old('prod_desc'), ['class' => 'form-control editor']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('prod_desc'))
                        <p class="help-block">
                            {{ $errors->first('prod_desc') }}
                        </p>
                    @endif
                </div>
            </div>
             <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notes', 'Notes', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notes', old('notes'), ['class' => 'form-control editor']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notes'))
                        <p class="help-block">
                            {{ $errors->first('notes') }}
                        </p>
                    @endif
                </div>
            </div>

        </div>
    </div>

    {!! Form::submit('Update',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.ckeditor').each(function () {
            CKEDITOR.replace($(this));
        });
    </script>

@stop
