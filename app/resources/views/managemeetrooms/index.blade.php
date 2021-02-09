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
                        <a class="btn btn-primary" href="{{ route('managemeetrooms.create') }}"> Add <i class="fas fa-plus-circle"></i></a>
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
                @foreach ($managemeetrooms as $managemeetroom)
                <tr>
                    <td>{{ $managemeetroom->name }}</td>
                    <td>{{ $managemeetroom->description }}</td>
                    <td>{{ $managemeetroom->capacity }}</td>
                    <td>{{ $managemeetroom->email_admin }}</td>
                    <td style="text-align:center">
                        <form action="{{ route('managemeetrooms.destroy',$managemeetroom->id) }}" method="POST">

                            <a href="{{ route('managemeetrooms.show',$managemeetroom->id) }}" class="btn btn-info" role="button" aria-pressed="true"><i class="far fa-sticky-note fa-lg"></i></a>

                            <a href="{{ route('managemeetrooms.edit',$managemeetroom->id) }}" class="btn btn-primary" role="button" aria-pressed="true"><i class="far fa-edit fa-lg"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"> <i class="far fa-trash-alt fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $managemeetrooms->links() !!}
        </div>
    </div>
@endsection