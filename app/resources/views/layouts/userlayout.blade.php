<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roombooking</title>
        <link  href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/fontawesome.js') }}"></script>
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/color.css') }}" rel="stylesheet">
        <link href="{{ asset('css/components.css') }}" rel="stylesheet">
        <link href="{{ asset('css/core.css') }}" rel="stylesheet">
        <link href="{{ asset('icomoon/styles.css') }}" rel="stylesheet">
        <!-- <link href="{{ asset('fonts/roboto.css') }}" rel="stylesheet">  -->
        <script type="text/javascript"> 
            function display_c(){
                var refresh=1000; // Refresh rate in milli seconds
                mytime=setTimeout('display_ct()',refresh)
            }
            function display_ct() {
                var x = new Date();
                // date part 
                var month = x.getMonth() + 1;
                var day = x.getDate();
                var year = x.getFullYear();
                if (month < 10 ){month = '0' + month;}
                if (day < 10 ){day = '0' + day;}
                var x1 = day + '/' + month + '/' + year;
                
                // time part 
                var hour = x.getHours();
                var minute = x.getMinutes();
                var second = x.getSeconds();
                    if(hour < 10 ){hour = '0' + hour;}
                    if(minute < 10 ) {minute = '0' + minute; }
                    if(second < 10){second = '0' + second;}
                    var x1 = x1 + ' ' +  hour + ':'+ minute + ':' + second
                
                document.getElementById('ct').innerHTML = x1
                display_c();
            }
        </script>

        <!-- Fullcalendar -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

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
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><i class="far fa-calendar-alt"></i> BUU-MRBS</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->user_fullname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('roombookings.index') }}"><i class="fas fa-home"></i> หน้าแรก</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-couch"></i> รายการห้อง <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">ชั้น 3 (3rd Floor)</a></li>
                            <li><a href="#">ชั้น 4 (4th Floor)</a></li>
                            <li><a href="#">ชั้น 5 (5th Floor)</a></li>
                            <li><a href="#">ชั้น 5 - เฉพาะอาจารย์</a></li>
                            <li><a href="#">ชั้น 6 - Mini Home Theatre</a></li>
                            <li><a href="#">ชั้น 6 - Karaoke</a></li>
                            <li><a href="{{ route('mediasingles.index') }}">ชั้น 6 - ห้องสื่อศึกษาเดี่ยว</a></li>
                            <li><a href="{{ route('mediagroups.index') }}">ชั้น 6 - ห้องสื่อศึกษากลุ่ม</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('mybookings.index') }}"><i class="fas fa-bookmark"></i> การจองของฉัน</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p><body onload=display_ct();></p><i class="far fa-clock"></i>
                        <span id='ct' ></span>
                    </li>
                </ul> 
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
