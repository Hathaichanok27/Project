@extends('layouts.userlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h3 class="text-light heading-divided"><i class="fas fa-map-marker-alt"></i> โซนห้องประชุม</h3>
                        <br>
                    </div>
                    <div class="pull-right">
                        <br>
                        <a class="btn btn-primary" href="{{ route('reservemeets.create') }}">จองห้อง</a>
                    </div>
                </div>
            </div>
            <!-- fullcalendar -->
            <div class="container">
                <div class="response"></div>
                <div id='calendar'></div>  
            </div>
        </div>
    </div>
@endsection