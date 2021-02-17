@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-bookmark"></i> การจองที่รอการอนุมัติ</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li class="active">การจองของฉัน</li>
                </ul>   
            </div>
            <div class="panel panel-flat">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-grey">
                            <th style="text-align:center">รายการ</th>
                            <th style="text-align:center">ชั้น</th>
                            <th style="text-align:center">ห้อง</th>
                            <th style="text-align:center">ระยะเวลา</th>
                            <th style="text-align:center">เวลาเริ่มต้น</th>
                            <th style="text-align:center">เวลาสิ้นสุด</th>
                            <th style="text-align:center">สร้างโดย</th>
                            <th style="text-align:center">สถานะการอนุมัติ</th>
                            <th style="text-align:center">การกระทำ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="text-align:center">
                            <td class="ng-binding">1</td>
                            <td class="ng-binding">พื้นที่ชั้น 6 - ห้องสื่อศึกษากลุ่ม</td>
                            <td class="ng-binding">ห้อง 3</td>
                            <td class="ng-binding">3 ชม.</td>
                            <td class="ng-binding">11.00</td>
                            <td class="ng-binding">14.00</td>
                            <td><a href="#" ng-click="startWizard(q.username)" class="ng-binding">60160039</a></td>
                            <td class="ng-binding">อนุมัติการจอง</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('detailreserves.index') }}" ng-click="bookInfoModal(q.book_id)"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr style="text-align:center">
                            <td class="ng-binding">2</td>
                            <td class="ng-binding">พื้นที่ชั้น 3</td>
                            <td class="ng-binding">ห้อง 3</td>
                            <td class="ng-binding">2 ชม.</td>
                            <td class="ng-binding">13.00</td>
                            <td class="ng-binding">15.00</td>
                            <td><a href="#" ng-click="startWizard(q.username)" class="ng-binding">60160039</a></td>
                            <td class="ng-binding">รอการอนุมัติ</td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-bars"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="{{ route('detailmeetrooms.index') }}" ng-click="bookInfoModal(q.book_id)"><i class="fas fa-info-circle"></i> รายละเอียด</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection