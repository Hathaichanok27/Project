@extends('layouts.userlayout')
@extends('layouts.calender')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-search"></i> จองห้องประชุม </h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="{{ route('roommedias.index') }}">จองห้องประชุม</a></li>
                </ul>   
            </div>

            <div id="div_name">
                <label for="name">Brief description</label>
                <input type="text" pattern="\s*\S+.*" id="name" name="name" required="" aria-required="true" maxlength="80" value="">
            </div>

            <p>Date: <input type="text" id="datepicker"></p>
            
@endsection 