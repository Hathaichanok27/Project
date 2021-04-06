<label class="col-sm-1 control-label">ห้อง: </label>
    <div class="col-sm-3">
        <select onchange="showview()" class="form-control" name="room_name" id="room_name">
            <option>กรุณาเลือกห้อง...</option>
             @foreach($room_floor as $room)
                <option value="{{ $room->id }}">{{ $room->room_name }}</option>
             @endforeach 
        </select>  
    </div> 
</div>