
<link rel="stylesheet" type="text/css" href="css/main.css">

@extends('layouts.app')


@section('content')

<br>
<div class="container">
    <br>
    <center>
        <img src="/storage/poster_images/" style="height: 25%; width: 19%; border-radius: 50%; padding-bottom: 10px">
    </center><br>
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active"> My Profile</a>
                </li>
                
            </ul>

            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">{{ __('Personal Information ')}}</h5>
                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        @if(Session::has('message'))
                            <div class="alert alert-success" roles="alert">
                            {{ Session::get('message') }}
                            </div>
                        @endif

                        <div class="card-body">
                            

                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">Matric No. <span style="color: red">*</span>
                            </label>

                            <div class="col-lg-9">
                                <input type="textarea" id="matric" class="form-control @error('matric') is-invalid @enderror" name="matric"
                                value="{{ old('matric') ?? $user->profile->matric  }}">

                                @error('matric_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kulliyyah" class="col-lg-3 col-form-label form-control-label">Kulliyyah <span style="color: red">*</span></label>

                            <div class="col-lg-9">
                                <input type="textarea" id="kulliyyah" class="form-control @error('kulliyyah') is-invalid @enderror" name="kulliyyah" 
                                value="{{ old('kulliyyah') ?? $user->profile->kulliyyah }}"> 

                                @error('kulliyyah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-lg-3 col-form-label form-control-label">Level <span style="color: red">*</span></label>

                            <div class="col-lg-9">
                                <select class="form-control" id="level" type="level" class="form-control @error('level') is-invalid @enderror" name="level"
                                value="{{ old('level') ?? $user->profile->level }}">

                                  <option id="1">1</option>
                                  <option id="2">2</option>
                                  <option id="3">3</option>
                                  <option id="4">4</option>
                                </select>

                                @error('level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">Phone No. <span style="color: red">*</span></label>

                            <div class="col-lg-9">
                                <input id="phone" type="textarea" class="form-control @error('phone') is-invalid @enderror" name="phone" 
                                value="{{ old('phone') ?? $user->profile->phone }}">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matric_no" class="col-lg-3 col-form-label form-control-label">{{ __('Skills') }}</label>

                            <div class="col-lg-9">
                                <input id="skills" type="textarea" class="form-control @error('skills') is-invalid @enderror" name="skills" 
                                value="{{ old('skills') ?? $user->profile->skills }}">

                                @error('skills')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                        

                        <br>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">

                                <button type="cancel" class="btn btn-dark">
                                    {{ __('Cancel') }}
                                </button>

                                <button type="Update" class="btn btn-primary">
                                    {{ __('Update profile') }}
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="messages">
                    


                </div>
            </div>
            <br><br>
        </div>                
    
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> My Profile</div>
                <div class="card-body">
                    <p><b>Name: </b>{{ Auth::user()->name }}</p>
                    <p><b>Email: </b>{{ Auth::user()->email }}</p>
                    <p><b>Matric No.: </b>{{ $user->profile->matric ?? 'N/A' }}</p>
                    <p><b>Kulliyyah: </b>{{ $user->profile->kulliyyah ?? 'N/A'}}</p>
                    <p><b>Level: </b>{{ $user->profile->level ?? 'N/A'}}</p>
                    <p><b>Phone No.: </b>{{ $user->profile->phone ?? 'N/A'}}</p>
                    <p><b>Skills: </b>{{ $user->profile->skills ?? 'N/A'}}</p>

                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Profile Picture</div>
                <div class="card-body">
                    <input type="file" name="profile_picture" class="form-control">
                    <br>
                </div>
                
            </div>
        </div>
         
        </div>

    </div>


                   
@endsection
