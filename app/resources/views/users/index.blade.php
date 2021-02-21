@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" align="center">
                    <h3>User</h3>
                </div>
                <div class="card-body">  
                    <table class="table table-bordered">
                        <thead class="thread">
                            <tr class="text-center"> 
                                <th scope="col">รหัสนิสิต</th>
                                <th scope="col">ชื่อ</th>
                                <th scope="col">เบอร์โทร</th>
                                <th scope="col">อีเมล</th>
                            </tr>
                        </thead>
                    
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->user_fullname }}</td>
                            <td>{{ $user->user_telnum }}</td>
                            <td>{{ $user->user_email }}</td>
                        </tr>
                    @endforeach
                    </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection