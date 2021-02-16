@extends('layouts.userlayout')

@section('content')
<br>
<div class="panel panel-white" style="margin-bottom:0px;">
                <div class="panel-heading">
                  <h6 class="panel-title">รายละเอียดผู้ใช้</h6>
                  <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-dismiss="modal"><i class="icon-cross2"></i></a></li>
                      </ul>
                    </div>
                  <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                  <div class="panel-body">
                     <h6 class="form-wizard-title text-semibold">
                      <span class="form-wizard-count"><i class="fa fa-info"></i></span>
                      ข้อมูลผู้จองห้อง
                      <small class="display-block">ข้อมูลการจองห้องประชุม</small>
                    </h6>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-body">
                          <div class="media">
                            <div class="media-left">
                              <a href="javascript:;">
                                <img src="http://roombooking.lib.buu.ac.th/assets/images/unknown_user.png" style="width: 70px; height: 70px;" class="img-circle" alt="">
                              </a>
                            </div>
                            <div class="media-body">
                              <h5 class="media-heading text-bold ng-binding" style="color:#D35400">นัฐวัฒน์  อิ่มเทศ</h5>
                              <p class="text-semibold" style="margin-bottom:2px;">Account : <b class="ng-binding">60160039</b></p>
                              <p class="text-semibold" style="margin-bottom:2px;">Confirmation status : <strong style="color:#F62459" class="ng-binding">Confirmed</strong></p>
                              <p class="text-semibold" style="margin-bottom:2px;">Floor : <strong style="color:#F62459" class="ng-binding"> 3 </strong></p>
                              <p class="text-semibold" style="margin-bottom:2px;">Room : <strong style="color:#F62459" class="ng-binding"> 1 </strong></p>
                              <p class="text-semibold" style="margin-bottom:2px;">Start time : <strong style="color:#F62459" class="ng-binding">09.00 am.</strong></p>
                              <p class="text-semibold" style="margin-bottom:2px;">Duration : <strong style="color:#F62459" class="ng-binding">1</strong></p>
                              <p class="text-semibold" style="margin-bottom:2px;">End time : <strong style="color:#F62459" class="ng-binding">10.00 am.</strong></p>
                              
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="wizard-actions">
                        <input class="btn btn-danger" value="ปิด" type="button" data-dismiss="modal">
                      </div>
                    </div>
                  </div>
                </div>
@endsection 


Description:	
Confirmation status:	
Approval status:	
Room:	
Start time:	
Duration:	
End time: