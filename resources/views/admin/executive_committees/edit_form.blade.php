<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
@extends('admin.master')
@section('title')
  Edit {{$title}}
@endsection
@section('search')
<ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route("get_executive_committees")}}">
                  List executive committee
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route("add_executive_committee")}}">
                  Add executive committee
                </a>
              </li>
</ul>
@endsection
@section('content')

<div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> Edit {{$title}}</h5>
              </div>
              <div class="card-body">
                <form method = "POST" action = "{{route('update_executive_committee',['id' => $executive_committee->id])}}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "designation">Designation(Position)</label>
                        <input type="text" id = "designation" name = "designation" value = "{{$executive_committee->designation}}" class="form-control" placeholder="Position" required>
                      </div>
                    </div>
                    <!-- <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label for = "username">Username</label>
                        <input type="text" id = "username" name = "username" class="form-control" placeholder="Username">
                      </div>
                    </div> -->
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id = "email" name = "email" value = "{{$executive_committee->email}}" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label for = "first_name">First Name</label>
                        <input type="text" class="form-control" id = "first_name" name = "first_name" value = "{{$executive_committee->first_name}}" placeholder="First name" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for = "last_name">Last Name</label>
                        <input type="text" id = "last_name" name = "last_name" value = "{{$executive_committee->last_name}}" class="form-control" placeholder="Last name"required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for = "address">Address</label>
                        <input type="text" id = "address" name = "address" value = "{{$executive_committee->address}}" class="form-control" placeholder="Home Address" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for = "phone">Phone</label>
                        <input type="text" id = "phone" name = "phone" class="form-control" placeholder="Phone" value = "{{$executive_committee->phone}}" required>
                      </div>
                         @error('phone')
                              <p style = "color:red" class="flash-message">{{ $message }}</p>
                          @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for = "city">City</label>
                        <input type="text" id = "city" name = "city" value = "{{$executive_committee->city}}" class="form-control" placeholder="City">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label for = "country">Country</label>
                        <input type="text" id = "country" name = "country" value = "{{$executive_committee->country}}" class="form-control" placeholder="Country">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div>
                        <label for = "image">Image</label>
                        <input type="file" name = "image" class="form-control">
                      </div>
                      @error('image')
                              <p style = "color:red" class="flash-message">{{ $message }}</p>
                          @enderror
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-4">
                      <button type = "submit" class="btn btn-primary btn-block">Edit</button>
                  </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{ asset( 'storage/' . $executive_committee->image_path ) }}" alt="...">
                    <h5 class="title">{{$executive_committee->first_name .' '. $executive_committee->last_name}}</h5>
                  </a>
                  <p class="description">
                    {{$executive_committee->designation}}
                  </p>
                </div>
                <p class="description text-center">
                {{$executive_committee->phone}}
                </p>
                <p class="description text-center">
                {{$executive_committee->address}}
                </p>
                
                <p class="description text-center">
                {{$executive_committee->city.','.$executive_committee->country}}
                </p>
                <p class="description text-center">
                {{$executive_committee->email}}
                </p>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
