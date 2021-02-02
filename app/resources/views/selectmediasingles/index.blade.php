@extends('layouts.userlayout')

@section('content')
	<div class="page-container">
		<div class="container">
			<div class="page-title">
                <h4><i class="fas fa-search"></i> เลือกสื่อที่จะรับชมอย่างน้อย 1 อย่าง</h4>
                <ul class="breadcrumb breadcrumb-caret position-right">
                    <li><a href="{{ route('roommedias.index') }}">หน้าแรก</a></li>
                    <li><a href="">ชั้น 6</a></li>
                    <li><a href="{{ route('mediasingles.index') }}">ห้องสื่อศึกษาเดี่ยว</a></li>
                    <li class="active">เลือกสื่อ</li>
                </ul>   
            </div>

            <div class="page-container" ng-controller="SelectMediaCtrl">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Search field -->
				<div class="panel panel-flat border-grey">
					<div class="panel-heading">
						<h5 class="panel-title">ค้นหาสื่อจากคำค้น</h5>
					</div>

					<div class="panel-body">
						<form action="" id="main-search-form" class="main-search" ng-submit="doSearch()">
							<div class="input-group content-group">
								<div class="has-feedback has-feedback-left ">
									<input type="text" class="form-control input-xlg border-blue" id="searchKeyword" ng-model='searchKeyword'>
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
											<a href="javascript:;" class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" ng-cloak>
												<i class="{{search.searchType.iconClass}}"></i> {{search.searchType.typeName}} <span class="caret"></span>
											</a>

											<ul class="dropdown-menu">
												<li ng-repeat="item in search.searchTypes">
													<a href="javascript:;" ng-click="changeSearchType(item)"><i class="{{item.iconClass}}"></i> {{item.typeName}}</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>

@endsection 