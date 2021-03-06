@extends('layouts.admin')

@section('title')
	Profil
@endsection

@section('content')
	<div class="row mt-8">
		<div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
			<div class="card card-profile shadow">
				<div class="row justify-content-center">
				  <div class="col-lg-3 order-lg-2">
				    <div class="card-profile-image">
				      <a href="#">
				        <img src="../assets/img/theme/daniel.jpg" class="rounded-circle">
				      </a>
				    </div>
				  </div>
				</div>
				<div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
				  <div class="d-flex justify-content-between">
				    <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
				    <a href="#" class="btn btn-sm btn-default float-right">Message</a>
				  </div>
				</div>
				<div class="card-body pt-0 mt-5 pt-md-4">
				  <div class="text-center">
				    <h3>
				      {{ auth()->user()->fullName }}<span class="font-weight-light">, 27</span>
				    </h3>
				    <div class="h5 font-weight-300">
				      <i class="ni location_pin mr-2"></i>Kinshasa, RDC
				    </div>
				    <div class="h5 mt-4">
				      <i class="ni business_briefcase-24 mr-2"></i>Responsable - Directeur des études
				    </div>
				    <div>
				      <i class="ni education_hat mr-2"></i>John Doe School
				    </div>
				    <hr class="my-4" />
				    <p>My bio.</p>
				    <a href="#">Plus</a>
				  </div>
				</div>
			</div>
		</div>
		<div class="col-xl-8 order-xl-1">
		  <div class="card bg-secondary shadow">
		    <div class="card-header bg-white border-0">
		      <div class="row align-items-center">
		        <div class="col-8">
		          <h3 class="mb-0">My account</h3>
		        </div>
		        <div class="col-4 text-right">
		          <a href="#!" class="btn btn-sm btn-primary">Settings</a>
		        </div>
		      </div>
		    </div>
		    <div class="card-body">
		      <form>
		        <h6 class="heading-small text-muted mb-4">User information</h6>
		        <div class="pl-lg-4">
		          <div class="row">
		            <div class="col-lg-6">
		              <div class="form-group">
		                <label class="form-control-label" for="input-username">Username</label>
		                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="{{ auth()->user()->username }}">
		              </div>
		            </div>
		            <div class="col-lg-6">
		              <div class="form-group">
		                <label class="form-control-label" for="input-email">Email address</label>
		                <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="">
		              </div>
		            </div>
		          </div>
		          <div class="row">
		            <div class="col-lg-6">
		              <div class="form-group">
		                <label class="form-control-label" for="input-first-name">First name</label>
		                <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{ auth()->user()->first_name }}">
		              </div>
		            </div>
		            <div class="col-lg-6">
		              <div class="form-group">
		                <label class="form-control-label" for="input-last-name">Last name</label>
		                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="{{ auth()->user()->last_name }}">
		              </div>
		            </div>
		          </div>
		        </div>
		        <hr class="my-4" />
		        <!-- Address -->
		        <h6 class="heading-small text-muted mb-4">Contact information</h6>
		        <div class="pl-lg-4">
		          <div class="row">
		            <div class="col-md-12">
		              <div class="form-group">
		                <label class="form-control-label" for="input-address">Address</label>
		                <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="{{ auth()->user()->address }}" type="text">
		              </div>
		            </div>
		          </div>
		          <div class="row">
		            <div class="col-lg-4">
		              <div class="form-group">
		                <label class="form-control-label" for="input-city">City</label>
		                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="Kinshasa">
		              </div>
		            </div>
		            <div class="col-lg-4">
		              <div class="form-group">
		                <label class="form-control-label" for="input-country">Country</label>
		                <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="République Démocratique de Congo">
		              </div>
		            </div>
		            <div class="col-lg-4">
		              <div class="form-group">
		                <label class="form-control-label" for="input-country">Postal code</label>
		                <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="01215">
		              </div>
		            </div>
		          </div>
		        </div>
		      </form>
		    </div>
		  </div>
		</div>
	</div>
@endsection
