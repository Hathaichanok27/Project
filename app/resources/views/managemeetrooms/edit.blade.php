@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
			<div class="pull-left"> 
                <h2>Edit Room</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('managemeetrooms.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('managemeetrooms.update',$managemeetroom->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $managemeetroom->name }}" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            <input type="text" name="description" value="{{ $managemeetroom->description }}" class="form-control" placeholder="Description">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Capacity:</strong>
                            <input type="text" name="capacity" value="{{ $managemeetroom->capacity }}" class="form-control" placeholder="Capacity">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Room Admin E-Mail:</strong>
                            <input type="text" name="email_admin" value="{{ $managemeetroom->email_admin }}" class="form-control" placeholder="E-Mail">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection