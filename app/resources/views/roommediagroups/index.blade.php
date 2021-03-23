@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>จัดการห้องสื่อศึกษากลุ่ม</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('roommediagroups.create') }}">เพิ่มห้อง <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align:center">ลำดับ</th>
                            <th style="text-align:center">ประเภท</th>
                            <th style="text-align:center">ชั้น</th>
                            <th style="text-align:center">ชื่่อห้อง</th> 
                            <th style="text-align:center">สถานะ</th>
                            <th style="text-align:center" width="280px">การกระทำ</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($roommediagroups as $roommediagroup)
                            <tr style="text-align:center">
                                <td>{{ ++$i }}</td>
                                <td>{{ $roommediagroup->room_type }}</td>
                                <td>{{ $roommediagroup->room_floor }}</td>
                                <td>{{ $roommediagroup->room_name }}</td>
                                <td class="text-center"><b style="color:<?php echo $roommediagroup->room_status == 'ไม่เปิดใช้งาน'?'#d9534f':''?><?php echo $roommediagroup->room_status == 'ว่าง'?'#5cb85c':''?><?php echo $roommediagroup->room_status == 'กำลังใช้งาน'?'#f0ad4e':''?>">{{$roommediagroup->room_status}}</b></td>
                                <td>
                                    <form action="{{ route('roommediagroups.destroy',$roommediagroup->id) }}" method="POST">
                                        <a href="{{ route('roommediagroups.show',$roommediagroup->id) }}" class="btn btn-info" role="button" aria-pressed="true"><i class="far fa-sticky-note fa-lg"></i></a>
                                        <a href="{{ route('roommediagroups.edit',$roommediagroup->id) }}" class="btn btn-primary" role="button" aria-pressed="true"><i class="far fa-edit fa-lg"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?');" id="btnDelete"><i class="far fa-trash-alt fa-lg"></i></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                {!! $roommediagroups->links() !!}
            </div>
        </div>
    </div>
@endsection