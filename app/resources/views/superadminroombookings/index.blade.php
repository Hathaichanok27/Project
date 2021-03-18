@extends('layouts.superadminlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="row justify-content-center">
                <h3 class="text-light heading-divided">เลือกบริการ</h3>
                <div class="col-md-4 col-md-offset-2">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-primary text-primary">
                                <i class="fas fa-fas fa-wrench"></i>
                            </div>
                            <h5 class="text-semibold">จัดการเจ้าหน้าที่</h5>
                            <a href="{{ route('manageadmins.index') }}" class="btn bg-primary-400">ไปที่ <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-danger text-danger">
                                <i class="fas fa-bars"></i>
                            </div>
                            <h5 class="text-semibold">จัดการห้อง</h5>
                            <a href="{{ route('rooms.index') }}" class="btn bg-danger-400">ไปที่ <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@endsection