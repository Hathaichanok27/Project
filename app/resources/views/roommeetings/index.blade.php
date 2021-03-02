@extends('layouts.userlayout')


@section('content')
	<div class="page-container">
		<div class="container">
        <div class="row justify-content-center">
            <h3 class="text-light heading-divided"><i class="fas fa-map-marker-alt"></i> โซนห้องประชุม</small></h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="select-floor">Floor</label>
                    <select id="select-floor" class="form-control">
                        <option value="floor-3">ชั้น 3 (3rd Floor)</option>
                        <option value="floor-4">ชั้น 4 (4th Floor)</option>
                        <option value="floor-5">ชั้น 5 (5th Floor)</option>
                        <option value="floor-5-aj">ชั้น 5 - เฉพาะอาจารย์</option>
                        <option value="floor-6-mini-home-theatre">ชั้น 6 - Mini Home Theatre</option>
                        <option value="floor-6-karaoke">ชั้น 6 - Karaoke</option>                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="select-room">Room</label>
                    <select id="select-room" class="form-control">
                        <option value="room-1">Room 1</option>
                        <option value="room-2">Room 2</option>
                        <option value="room-3">Room 3</option>
                        <option value="room-4">Room 4</option>
                        <option value="room-5">Room 5</option>
                        <option value="room-6">Room 6</option>
                    </select>
                </div>
            </div>
            
        </div>     
    </div>

    <!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body>
  
<div class="container">
    <div id='calendar'></div>
</div>
   
<script>
$(document).ready(function () {
   
var SITEURL = "{{ url('/') }}";
  
$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  
var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/fullcalender",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/fullcalenderAjax",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
  
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true);
  
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
  
                        $.ajax({
                            url: SITEURL + '/fullcalenderAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/fullcalenderAjax',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");
                                }
                            });
                        }
                    }
 
                });
 
});
 
function displayMessage(message) {
    toastr.success(message, 'Event');
} 
  
</script>
  
</body>
</html>

@endsection

