@extends('admin.layout.app')
@section('content')
<div class="row">
	<div class="col-12 position-relative z-index-2">
	  <div class="card card-plain mb-4">
		<div class="card-body p-3">
		  <div class="row">
			<div class="col-lg-6">
			  <div class="d-flex flex-column h-100">
				<h2 class="font-weight-bolder mb-0">General Statistics</h2>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="row">
		<div class="col-lg-3 col-sm-5">
		  <div class="card mb-2">
			<div class="card-header p-3 pt-2">
			  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
				<i class="fas fa-couch"></i>
			  </div>
			  <div class="text-end pt-1">
				<p class="text-sm mb-0 text-capitalize">Bookings</p>
				<h4 class="mb-0">281</h4>
			  </div>
			</div>

			<hr class="dark horizontal my-0" />
			<div class="card-footer p-3">
			  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
			</div>
		  </div>
		</div>
		<div class="col-lg-3 col-sm-5 mt-sm-0 mt-4">
		  <div class="card mb-2">
			<div class="card-header p-3 pt-2">
			  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
				<i class="fas fa-users"></i>
			  </div>
			  <div class="text-end pt-1">
				<p class="text-sm mb-0 text-capitalize">Today's Users</p>
				<h4 class="mb-0">2,300</h4>
			  </div>
			</div>

			<hr class="dark horizontal my-0" />
			<div class="card-footer p-3">
			  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
			</div>
		  </div>
		</div>
		<div class="col-lg-3 col-sm-5 mt-sm-0 mt-4">
		  <div class="card mb-2">
			<div class="card-header p-3 pt-2 bg-transparent">
			  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
				<i class="fas fa-store"></i>
			  </div>
			  <div class="text-end pt-1">
				<p class="text-sm mb-0 text-capitalize">Revenue</p>
				<h4 class="mb-0">34k</h4>
			  </div>
			</div>

			<hr class="horizontal my-0 dark" />
			<div class="card-footer p-3">
			  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
			</div>
		  </div>
		</div>
		<div class="col-lg-3 col-sm-5 mt-sm-0 mt-4">
		  <div class="card">
			<div class="card-header p-3 pt-2 bg-transparent">
			  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
				<i class="fas fa-user-plus"></i>
			  </div>
			  <div class="text-end pt-1">
				<p class="text-sm mb-0 text-capitalize">Followers</p>
				<h4 class="mb-0">+91</h4>
			  </div>
			</div>

			<hr class="horizontal my-0 dark" />
			<div class="card-footer p-3">
			  <p class="mb-0">Just updated</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="row card shadow-lg p-4 m-1">
	<table class="table align-items-center mb-0" id="example">
		<thead>
			<tr>
				<th class="text-uppercase text-secondary font-weight-bolder opacity-7">No</th>
				<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Username</th>
				<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Password</th>
				<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Role</th>
				<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Email</th>
				<th class="text-center text-uppercase text-secondary font-weight-bolder opacity-7">Action</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 truncate">Password</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
				<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
			</tr>
		</tfoot>
		<tbody>
			<tr>
				<td>1</td>
				<td class="align-middle text-center">zuzu</td>
				<td class="align-middle text-center text-truncate" style="max-width: 10px">haha</td>
				<td class="align-middle text-center">3</td>
				<td class="align-middle text-center">ihir</td>
				<td>cek</td>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection