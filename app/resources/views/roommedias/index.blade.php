@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="row justify-content-center">
            <h3 class="text-light heading-divided"><i class="fas fa-map-marker-alt"></i> โซนชั้น 6 <small>6<sup>th</sup> floor</small></h3>
                <div class="col-md-4 col-md-offset-2">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-warning text-warning">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="text-semibold">ห้องสื่อศึกษากลุ่ม</h5>
                            <p class="mb-15">ห้องศึกษากลุ่มมัลติมีเดีย ให้บริการรับชมสื่อมัลติมีเดีย<br>เป็นเวลา 3 ชม. กำหนดผู้ใช้ขั้นต่ำ 3 คน</p>
                            <a href="{{ route('mediagroups.index') }}" class="btn bg-warning-400">รายการห้อง <i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel border-grey">
                        <div class="panel-body text-center">
                            <div class="icon-object border-primary text-primary">
                                <i class="fas fa-user"></i>
                            </div>
                            <h5 class="text-semibold">ห้องสื่อศึกษาเดี่ยว</h5>
                            <p class="mb-15">ห้องศึกษาเดี่ยวให้บริการเครื่องสำหรับรับชมสื่อมัลติเมียเดีย<br>เป็นเวลา 3 ชม. กำหนดผู้ใช้ 1-2 คน</p>
                            <a href="{{ route('mediasingles.index') }}" class="btn bg-primary-400">รายการห้อง <i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
@endsection