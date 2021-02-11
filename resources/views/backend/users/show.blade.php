@push('css')
<style>
    body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff) !important;
    }
</style>
@endpush
@extends('layouts.backend.app')
@section('content')<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4 profile-picture">
            <div class="profile-img">
                <img src="{{url('assets/images/user/avatar.png')}}" alt=""/>
            </div>
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-2 edit-profile-btn">
            <a href="{{route('app.users.edit', $user->id)}}" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="profile-head-second">
                <h5>
                  {{$user->name}}
                </h5>
                <h6>
                    @if($user->role->name !== 'User')
                    {{$user->role->name}}
                    @endif
                </h6>
            </div>
        </div>
       <div class="col-md-8 profile-about">
            
         <h4>About</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-8 about-section">
            <div class="row" style="margin-top: 10px">
                <div class="col-md-6">
                    <label>Name</label>
                </div>
                <div class="col-md-6">
                    <p>{{$user->name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Email Address</label>
                </div>
                <div class="col-md-6">
                    <p>{{$user->email}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Status</label>
                </div>
                <div class="col-md-6">
                    @if($user->status == 1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Joined At</label>
                </div>
                <div class="col-md-6">
                    <p>{{$user->created_at}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Last Updated</label>
                </div>
                <div class="col-md-6">
                    <p>{{$user->updated_at}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')
