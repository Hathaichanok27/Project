@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="pull-left"> 
                    <h2>ข้อมูลเจ้าหน้าที่</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('manageadmins.index') }}" title="Go back">ย้อนกลับ</a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชื่อ:</strong>
                        {{ $manageadmin->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>อีเมล:</strong>
                        {{ $manageadmin->email }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection