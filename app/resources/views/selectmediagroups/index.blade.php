@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-search"></i> เลือกสื่อที่จะรับชมอย่างน้อย 1 อย่าง</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roommedias.index') }}">หน้าแรก</a></li>
                    <li><a href="">ชั้น 6</a></li>
                    <li><a href="{{ route('mediagroups.index') }}">ห้องสื่อศึกษากลุ่ม</a></li>
                    <li class="active">เลือกสื่อ</li>
                </ul>   
            </div>

            <div class="panel panel-flat border-grey">
	            <div class="panel-heading">
		            <h5 class="panel-title">ค้นหาสื่อจากคำค้น</h5>
	            </div>
                <div class="panel-body">
                    <form action="" id="main-search-form" class="main-search ng-pristine ng-valid" ng-submit="doSearch()">
                    <div class="input-group content-group">
                        <div class="has-feedback has-feedback-left ">
                            <input type="text" class="form-control input-xlg border-blue ng-pristine ng-untouched ng-valid ng-empty" id="searchKeyword" ng-model="searchKeyword">
                                <div class="form-control-feedback">
                                    <i class="icon-search4 text-muted text-size-base"></i>
                                </div>
                        </div>
                        <div class="input-group-btn">
				            <button type="button" ng-click="doSearch()" class="btn btn-primary btn-xlg">ค้นหา</button>
			            </div>
                    </div>
                    <div class="row search-option-buttons">
                        <div class="col-sm-6">
                            <ul class="list-inline list-inline-condensed no-margin-bottom">
                                <li class="dropdown">
                                    <a href="javascript:;" class="btn btn-link btn-sm dropdown-toggle ng-binding" data-toggle="dropdown">
                                        <i class="fas fa-layer-group position-left"></i> ทุกเขตคำค้น <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li ng-repeat="item in search.searchTypes" class="ng-scope">
                                            <a href="javascript:;" ng-click="changeSearchType(item)" class="ng-binding"><i class="fas fa-film position-left"></i> ชื่อเรื่อง</a>
                                        </li>
                                        <li ng-repeat="item in search.searchTypes" class="ng-scope">
                                            <a href="javascript:;" ng-click="changeSearchType(item)" class="ng-binding"><i class="fas fa-tag position-left"></i> เลขเรียก</a>
                                        </li>
                                        <li ng-repeat="item in search.searchTypes" class="ng-scope">
                                            <a href="javascript:;" ng-click="changeSearchType(item)" class="ng-binding"><i class="fas fa-layer-group position-left"></i> ทุกเขตคำค้น</a>
                                        </li>
                                    </ul>
					            </li>
				            </ul>
			            </div>
                        <div class="col-sm-6 text-right">
                            <ul class="list-inline no-margin-bottom">
                                <li><a href="http://webopac.lib.buu.ac.th/" class="btn btn-link btn-sm" target="_blank"><i class="fas fa-qrcode position-left"></i> ค้นหาจาก WEB OPAC</a></li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h5><i class="fas fa-search"></i> ผลการค้นหา</h5>
                            <div class="panel panel-flat border-grey">
                                <div class="panel-body" ng-show="!searchResults.length">
                                    <p class="text-muted text-center"> ไม่มีผลลัพธ์จากการค้นหา</p>
                                </div>

                                <ul class="media-list ng-hide" ng-show="searchResults.length">
                                    <!-- ngRepeat: result in searchResults -->
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class=""><i class="fas fa-search"></i> <span class="text-semibold">สื่อที่ต้องการรับชม</span></h5>
                            <div class="panel panel-flat border-grey" id="selectedZone" ng-drop="true" ng-drop-success="onDropComplete($data,$event)">
                                <div class="panel-body" ng-show="!selectedMedia.length">
                                    <p class="text-muted text-center">ไม่มีสื่อที่ต้องการรับชม</p>
                                </div>

                                <ul class="media-list ng-hide" ng-show="selectedMedia.length">
                                    <!-- ngRepeat: item in selectedMedia -->
                                </ul>
                            </div>
                            <input type="checkbox" ng-model="userOwnerMedia" id="userOwnerMedia" ng-change="addUserOwnerMedia()" class="ng-pristine ng-untouched ng-valid ng-empty"> 
                            <label for="userOwnerMedia">Netflix</label>
                            <br><br>
                            <a href="{{ route('confirmmediagroups.index') }}" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">ถัดไป <i class="fas fa-chevron-right"></i></a>
                        </div>
		            </div>
                </div>
            </div>
        </div>     
    </div>
@endsection 