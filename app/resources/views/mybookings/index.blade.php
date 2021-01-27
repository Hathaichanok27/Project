@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-bookmark"></i> Bookings awaiting approval</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roombookings.index') }}">หน้าแรก</a></li>
                    <li><a href="">การจองของฉัน</a></li>
                </ul>   
            </div>

            <div class="panel panel-flat">
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-grey">
                            <th style="text-align:center">Entry</th>
                            <th style="text-align:center">Create by</th>
                            <th style="text-align:center">Area</th>
                            <th style="text-align:center">Room</th>
                            <th style="text-align:center">Start time</th>
                            <th style="text-align:center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td class="ng-binding">นัฐวัฒน์</td>
                        <td><a href="#" ng-click="startWizard(q.username)" class="ng-binding">60160039</a></td>
                        <td class="ng-binding">พื้นที่ชั้น 6 (6th floor)</td>
                        <td class="ng-binding">Room 3</td>
                        <td class="ng-binding">11.30 - wednesday 30 December 2020</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu9"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:;" ng-click="bookInfoModal(q.book_id)"><i class="icon-info22"></i> รายละเอียด</a></li>
                                        <li><a href="javascript:;" ng-click="sendMsgModal(q.book_id)"><i class="icon-bubble-lines3"></i> ส่งข้อความแจ้งเตือน</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection