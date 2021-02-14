@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="pull-left">
                    <h2>แก้ไขข้อมูลเจ้าหน้าที่</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('manageadmins.index') }}" title="Go back"><i class="fas fa-backward "></i></a>
                </div>
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

            <form action="{{ route('manageadmins.update',$manageadmin->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชื่อ:</strong>
                            <input type="text" name="name" value="{{ $manageadmin->name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>อีเมล:</strong>
                            <input type="text" name="email" value="{{ $manageadmin->email }}"class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>รหัสผ่าน:</strong>
                            <input type="password" name="password" value="{{ $manageadmin->password }}"class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ยืนยันรหัสผ่าน:</strong>
                            <input type="password" name="confirm_password" value="{{ $manageadmin->confirm_password }}"class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">ยืนยัน</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection