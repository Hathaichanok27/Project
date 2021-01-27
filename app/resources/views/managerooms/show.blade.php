@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="pull-left"> 
                <h2> Informations </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('managerooms.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $manageroom->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Descriptions:</strong>
                        {{ $manageroom->description }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Capacity:</strong>
                        {{ $manageroom->capacity }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Room Admin E-Mail:</strong>
                        {{ $manageroom->email_admin }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection