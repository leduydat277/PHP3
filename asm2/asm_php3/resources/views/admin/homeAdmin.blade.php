@extends('layouts.admin')
@section('title', 'Trang admin')
@section('content')
<div class="row">
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-red">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-red">{{$user}}</h3>
										<p>User</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">{{$shoe}}</h3>
										<p>Sản phẩm</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-yellow">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-yellow">{{$cate}}</h3>
										<p>Danh mục</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-red">
										<i class="bi bi-pie-chart"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-red">{{$cate1}}</h3>
										<p>Sản phẩm trong danh mục Facere</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-blue">
										<i class="bi bi-emoji-smile"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-blue">{{$cate2}}</h3>
										<p>Sản phẩm trong danh mục Omnis.</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-yellow">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-yellow">{{$cate3}}</h3>
										<p>Sản phẩm trong danh mục Vitae et.</p>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-sm-6 col-12">
								<div class="stats-tile">
									<div class="sale-icon shade-yellow">
										<i class="bi bi-box-seam"></i>
									</div>
									<div class="sale-details">
										<h3 class="text-yellow">{{$cate4}}</h3>
										<p>Sản phẩm trong danh mục Autem.</p>
									</div>
								</div>
							</div>
						</div>
						
@endsection