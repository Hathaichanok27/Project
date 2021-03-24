@extends('layouts.superadminlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="row justify-content-center">
                <h3 class="text-light heading-divided">จัดการห้อง</h3>
                <div class="col-md-4 col-md-offset-2">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-warning text-warning">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="text-semibold">ห้องสื่อศึกษากลุ่ม</h5>
                            <a href="{{ route('roommediagroups.index') }}" class="btn bg-warning-400">ไปที่ <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-primary text-primary">
                                <i class="fas fa-play"></i>
                            </div>
                            <h5 class="text-semibold">ห้องสื่อศึกษาเดี่ยว</h5>
                            <a href="{{ route('roommediasingles.index') }}" class="btn bg-primary-400">ไปที่ <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@endsection