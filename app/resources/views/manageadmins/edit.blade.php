@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="pull-left">
                    <h2>แก้ไขข้อมูลเจ้าหน้าที่</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('manageadmins.index') }}" title="Go back">ย้อนกลับ</a>
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
                            <strong>รหัสผู้ใช้:</strong>
                            <input type="text" name="admin_username" class="form-control" value="{{ $manageadmin->admin_username }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ชื่อ-นามสกุล:</strong>
                            <input type="text" name="admin_fullname" class="form-control" value="{{ $manageadmin->admin_fullname }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>อีเมล:</strong>
                            <input type="email" name="admin_email" class="form-control" value="{{ $manageadmin->admin_email }}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>เบอร์โทร:</strong>
                            <input type="text" name="admin_telnum" class="form-control" value="{{ $manageadmin->admin_telnum }}">
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