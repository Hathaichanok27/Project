@extends('layouts.superadminlayout')

@section('content')
    <div class="page-container">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>จัดการห้อง</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('rooms.create') }}">เพิ่มห้อง <i class="fas fa-plus-circle"></i></a>
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
                    <th style="text-align:center">ประเภท</th>
                    <th style="text-align:center">ชั้น</th>
                    <th style="text-align:center">ชื่่อห้อง</th> 
                    <th style="text-align:center">สถานะ</th>
                    <th style="text-align:center" width="280px">การกระทำ</th>
                </tr>
                @foreach ($rooms as $room)
                <tr style="text-align:center">
                    <td>{{ ++$i }}</td>
                    <td>{{ $room->room_type }}</td>
                    <td>{{ $room->room_floor }}</td>
                    <td>{{ $room->room_name }}</td>
                    <td>{{ $room->room_status }}</td>
                    <td>
                        <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                            <a href="{{ route('rooms.show',$room->id) }}" class="btn btn-info" role="button" aria-pressed="true"><i class="far fa-sticky-note fa-lg"></i></a>
                            <a href="{{ route('rooms.edit',$room->id) }}" class="btn btn-primary" role="button" aria-pressed="true"><i class="far fa-edit fa-lg"></i></a>


                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?');" id="btnDelete"><i class="far fa-trash-alt fa-lg"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $rooms->links() !!}
        </div>
    </div>
@endsection