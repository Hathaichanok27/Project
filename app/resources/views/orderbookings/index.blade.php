@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">	
            <div class="col-md-6 col-md-offset-3">
				<div class="panel panel-flat">
					<div class="panel-body">
						<center>
							<h3>ระบบทำการจองคิวเรียบร้อยแล้ว</h3>
							<h4 style="margin-bottom: 0px;">ลำดับคิวของคุณคือ</h4>
							<h1 id="qNumber">1</h1>
							<h4>สแกน QR Code นี้เพื่อติดตามสถานะการจอง</h4>
							<br>
							<qrcode version="2" error-correction-level="M" size="200" data=""><canvas class="qrcode" height="200" width="200"></canvas></qrcode>
							<br>
							<h4>หรือที่ URL นี้</h4>
							<h4><a href="#"></a></h4>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection