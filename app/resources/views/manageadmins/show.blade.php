@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="pull-left"> 
                <h2> Informations </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('manageadmins.index') }}"> Back</a>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $manageadmin->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $manageadmin->email }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles:</strong>
                        {{ $manageadmin->roles }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection