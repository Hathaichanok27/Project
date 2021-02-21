@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">   
                <div class="pull-left"> 
                    <h2>ข้อมูลห้อง</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('rooms.index') }}" title="Go back"><i class="fas fa-backward "></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ประเภท:</strong>
                        {{ $room->room_type }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชั้น:</strong>
                        {{ $room->room_floor }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ชื่อห้อง:</strong>
                        {{ $room->room_name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>สถานะ:</strong>
                        {{ $room->room_status }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection