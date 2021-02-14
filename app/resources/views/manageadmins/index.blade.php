@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Admin Managements</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('manageadmins.create') }}"> Create New Admin</a>
                    </div>
                </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">Name</th>
                    <th style="text-align:center">Email</th>
                    <th style="text-align:center" width="280px">Action</th>
                </tr>

                @foreach ($manageadmins as $manageadmin)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $manageadmin->name }}</td>
                    <td>{{ $manageadmin->email }}</td>
                    <td>
                        <form action="{{ route('manageadmins.destroy',$manageadmin->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('manageadmins.show',$manageadmin->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('manageadmins.edit',$manageadmin->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        {!! $manageadmins ?? ''->links() !!}  
        </div>
    </div>    
@endsection