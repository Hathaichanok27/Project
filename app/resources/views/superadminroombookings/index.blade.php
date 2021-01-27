@extends('layouts.superadminlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="row justify-content-center">
                <h3 class="text-light heading-divided">เลือกบริการ</h3>
                <div class="col-md-4 col-md-offset-2">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-danger text-danger">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="text-semibold">ห้องประชุม</h5>
                            <p class="mb-15">ให้บริการห้องประชุม<br>เป็นเวลา 2 ชม.</p>
                            <a href="" class="btn bg-danger-400">ไปที่ <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-primary text-primary">
                                <i class="fas fa-play"></i>
                            </div>
                            <h5 class="text-semibold">ห้องสื่อศึกษา</h5>
                            <p class="mb-15">ให้บริการเครื่องรับชมสื่อมัลติเมียเดีย<br>เป็นเวลา 3 ชม.</p>
                            <a href="" class="btn bg-primary-400">ไปที่ <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@endsection