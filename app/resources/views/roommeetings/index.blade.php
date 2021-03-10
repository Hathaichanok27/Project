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
<html>
<head>
  <title>Laravel Fullcalender Add/Update/Delete Event Example Tutorial - Tutsmake.com</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
 
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<body>
 
  <div class="container">
      <div class="response"></div>
      <div id='calendar'></div>  
  </div>
 
 
</body>
<script>
$(document).ready(function () {
var SITEURL = "{{url('/')}}";
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
var calendar = $('#calendar').fullCalendar({
editable: true,
events: SITEURL + "fullcalendar",
displayEventTime: true,
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
var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
$.ajax({
url: SITEURL + "fullcalendar/create",
data: 'title=' + title + '&amp;start=' + start + '&amp;end=' + end,
type: "POST",
success: function (data) {
displayMessage("Added Successfully");
}
});
calendar.fullCalendar('renderEvent',
{
title: title,
start: start,
end: end,
allDay: allDay
},
true
);
}
calendar.fullCalendar('unselect');
},
eventDrop: function (event, delta) {
var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
$.ajax({
url: SITEURL + 'fullcalendar/update',
data: 'title=' + event.title + '&amp;start=' + start + '&amp;end=' + end + '&amp;id=' + event.id,
type: "POST",
success: function (response) {
displayMessage("Updated Successfully");
}
});
},
eventClick: function (event) {
var deleteMsg = confirm("Do you really want to delete?");
if (deleteMsg) {
$.ajax({
type: "POST",
url: SITEURL + 'fullcalendar/delete',
data: "&amp;id=" + event.id,
success: function (response) {
if(parseInt(response) > 0) {
$('#calendar').fullCalendar('removeEvents', event.id);
displayMessage("Deleted Successfully");
}
}
});
}
}
});
});
function displayMessage(message) {
$(".response").html("<div class='success'>"+message+"</div>");
setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script>
</html>


            </div>
        </div>
    </div>
@endsection