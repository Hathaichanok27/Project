<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roombooking</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Global stylesheets -->
        <script type="text/javascript" src="http://roombooking.lib.buu.ac.th/assets/plugins/angular.min.js?v=100"></script>
        <link href="http://roombooking.lib.buu.ac.th/assets/fonts/roboto/roboto.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/css/icons/fontawesome/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/css/colors.css" rel="stylesheet" type="text/css">
        <link href="http://roombooking.lib.buu.ac.th/assets/plugins/angular-loading-bar/src/loading-bar.css" rel="stylesheet" type="text/css">

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
                var x1 = day + '-' + month + '-' + year;
                
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
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><i class="far fa-calendar-alt"></i> BUU-MRBS</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('login') }}"><span class="fas fa-sign-in-alt"></span> Login</a></li>
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
                            <li><a href="{{ route('mediagroups.index') }}">ชั้น 6 - ห้องสื่อศึกษากลุ่ม</a></li>
                            <li><a href="{{ route('mediasingles.index') }}">ชั้น 6 - ห้องสื่อศึกษาเดี่ยว</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="fas fa-bookmark"></i> การจองของฉัน</a></li>
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
