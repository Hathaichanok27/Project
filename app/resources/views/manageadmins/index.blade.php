@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>จัดการเจ้าหน้าที่</h2>
                    </div>

                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('manageadmins.create') }}">เพิ่มเจ้าหน้าที่ <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th style="text-align:center">ลำดับ</th>
                    <th style="text-align:center">รหัสผู้ใช้</th>
                    <th style="text-align:center">ชื่อ-นามสกุล</th>
                    <th style="text-align:center">อีเมล</th>
                    <th style="text-align:center">เบอร์โทร</th>
                    <th style="text-align:center" width="280px">การกระทำ</th>
                </tr>
                @foreach ($manageadmins as $manageadmin)
                <tr>
                    <td style="text-align:center">{{ ++$i }}</td>
                    <td>{{ $manageadmin->admin_username }}</td>
                    <td>{{ $manageadmin->admin_fullname }}</td>
                    <td>{{ $manageadmin->admin_email }}</td>
                    <td>{{ $manageadmin->admin_telnum }}</td>
                    <td style="text-align:center">
                        <form action="{{ route('manageadmins.destroy',$manageadmin->id) }}" method="POST">
                            <a href="{{ route('manageadmins.show',$manageadmin->id) }}" class="btn btn-info" role="button" aria-pressed="true">แสดง</a>
                            <a href="{{ route('manageadmins.edit',$manageadmin->id) }}" class="btn btn-primary" role="button" aria-pressed="true">แก้ไข</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('ต้องการลบแอดมินคนนี้ใช่หรือไม่ ?');" id="btnDelete">ลบ</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        {!! $manageadmins->links() !!}  
        </div>
    </div>    
@endsection