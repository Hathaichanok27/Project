@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Room Managements</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('managerooms.create') }}"> Add <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
        </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th style="text-align:center">Name</th>
                    <th style="text-align:center">Description</th>
                    <th style="text-align:center">Capacity</th>
                    <th style="text-align:center">Room Admin Email</th>
                    <th style="text-align:center" width="280px">Action</th>
                </tr>
                @foreach ($managerooms as $manageroom)
                <tr>
                    <td>{{ $manageroom->name }}</td>
                    <td>{{ $manageroom->description }}</td>
                    <td>{{ $manageroom->capacity }}</td>
                    <td>{{ $manageroom->email_admin }}</td>
                    <td style="text-align:center">
                        <form action="{{ route('managerooms.destroy',$manageroom->id) }}" method="POST">

                            <a href="{{ route('managerooms.show',$manageroom->id) }}" class="btn btn-info" role="button" aria-pressed="true"><i class="far fa-sticky-note fa-lg"></i></a>

                            <a href="{{ route('managerooms.edit',$manageroom->id) }}" class="btn btn-primary" role="button" aria-pressed="true"><i class="far fa-edit fa-lg"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"> <i class="far fa-trash-alt fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $managerooms->links() !!}
        </div>
    </div>
@endsection