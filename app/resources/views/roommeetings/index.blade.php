@extends('layouts.userlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row justify-content-center">
                <h3 class="text-light heading-divided"><i class="fas fa-map-marker-alt"></i> โซนห้องประชุม</small></h3>
                
                <!-- fullcalendar -->
                <div class="container">
                    <div class="response"></div>
                    <div id='calendar'></div>  
                </div>
            </div>
        </div>
    </div>
@endsection