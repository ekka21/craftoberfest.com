<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
       Craftoberfest 2016
    </title>

    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0"
          name="viewport"/>
    <meta http-equiv="Content-type"
          content="text/html; charset=utf-8">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
          rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/font-awesome.min.css"/>
    <link rel="stylesheet"
          href="{{ url('quickadmin/css') }}/bootstrap.min.css"/>
</head>



    <body style="padding: 40px 0;">
        <div class="container">
            <div class="content">
    {!! Form::open(['method' => 'POST', 'route' => ['apply.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Craftoberfest 2016<h1>
                    <p>Vendor application</p>
                    <p>This year night market will be Thursday October 13th, 2016 from 5PM to 10PM at Urbun Chestnut Brewing Company(Midtown) in St. Louis, MO.</p>
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 form-group <?php if ($errors->has('full_name')) print 'has-error';?>">
                    {!! Form::label('full_name', '*Full Name', ['class' => 'control-label']) !!}
                    {!! Form::text('full_name', old('full_name'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('full_name'))
                        <p class="help-block warning">
                            {{ $errors->first('full_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 form-group <?php if ($errors->has('biz_name')) print 'has-error';?>">
                    {!! Form::label('biz_name', '*Business Name', ['class' => 'control-label']) !!}
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
            <div class="col-xs-12 form-group <?php if ($errors->has('email')) print 'has-error';?>">
                    {!! Form::label('email', '*Email Address', ['class' => 'control-label']) !!}
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
            <div class="col-xs-12 form-group <?php if ($errors->has('website_1')) print 'has-error';?>">
                    {!! Form::label('website_1', '*Primary Website', ['class' => 'control-label']) !!}
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
                    {!! Form::label('website_2', 'Secondary Website', ['class' => 'control-label']) !!}
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
            <div class="col-xs-12 form-group <?php if ($errors->has('prod_desc')) print 'has-error';?>">
                    {!! Form::label('prod_desc', '*Product Description', ['class' => 'control-label']) !!}
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
            <div class="col-xs-12 form-group <?php if ($errors->has('booth_pref')) print 'has-error';?>">
                    {!! Form::label('booth_pref', '*Please indicate your booth preference' , ['class' => 'control-label']) !!}
                    <select name="booth_pref" class="form-control">
                        <option value="">Please select one</option>
                        <option value="No Preference">I have no preference</option>
                        <option value="Standard Booth">Standard Booth (6 ft table space) – $70</option>
                        <option value="Premium Booth">Premium Booth (10x10 tent space) – $85</option>
                    </select>
                    <p class="help-block"></p>
                    @if($errors->has('booth_pref'))
                        <p class="help-block">
                            {{ $errors->first('prod_pref') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 form-group <?php if ($errors->has('paypal_email')) print 'has-error';?>">
                    {!! Form::label('paypal_email', '*PayPal email address', ['class' => 'control-label']) !!}
                    <br>If accepted, you will receive a PayPal invoice for your vendor fee.
                    {!! Form::text('paypal_email', old('paypal_email'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('paypal_email'))
                        <p class="help-block">
                            {{ $errors->first('paypal_email') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit('Apply',['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}

            </div>
        </div>
    </body>
</html>
