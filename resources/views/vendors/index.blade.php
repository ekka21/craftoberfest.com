@extends('layouts.app')

@section('content')
    <h3 class="page-title">Vendors</h3>
    <p>
        <a href="{{ route('vendors.create') }}" class="btn btn-success">Add new</a>
    </p>
    @if(count($vendors) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                List
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped datatable">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                    <th>Business Name</th>
                    <th>Email Address</th>
                    <th>Website1</th>
                    <th>Website2</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Instagram</th>
                    <th>Paypal</th>
                    <th>Booth</th>

                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vendors as $vendor)
                        <tr>
                            <td>{{ $vendor->full_name }}</td>
                        <td>{{ $vendor->biz_name }}</td>
                        <td><a href="mailto:{{ $vendor->email }}" target="_blank">{{ $vendor->email }}</a></td>
                        <td><a href="{{ $vendor->website_1 }}" target="_blank">{{ $vendor->website_1 }}</a></td>
                        <td><a href="{{ $vendor->website_2 }}" target="_blank">{{ $vendor->website_2 }}</a></td>
                        <td>{{ $vendor->facebook }}</td>
                        <td>{{ $vendor->Twitter }}</td>
                        <td>{{ $vendor->instagram }}</td>
                        <td>{{ $vendor->paypal_email}}</td>
                        <td>{{ $vendor->booth_pref }}</td>

                            <td>
                                <a href="{{ route('vendors.edit',[$vendor->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                {!! Form::open(array(
            'style' => 'display: inline-block;',
            'method' => 'DELETE',
            'onsubmit' => "return confirm('".trans("Are you sure?")."');",
            'route' => ['vendors.destroy', $vendor->id])) !!}
{!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
{!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <p>No entries in table</p>
    @endif
@stop
