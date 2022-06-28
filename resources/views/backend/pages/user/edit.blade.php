@extends('backend.layout.template');

@section('body-content')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Create New brand</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
  </div>



  <div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="br-section-label">Update User</h6>
         <div class="row">
            <div class="col-lg-6">

                <form method="POST" action="{{route('user.update', $user->id)}}"  enctype="multipart/form-data">
                    @csrf 

                        <!-- user full name -->
                         <div class="form-group">
                            <label>User Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$user->name}}"             placeholder='Full Name' value="{{old('name')}}" required autofocus />
                            </div>

                            <!-- user email and mobile  -->
                            <div class="form-group">
                                <label>User Email</label>
                                  <input id="email" class="form-control" value="{{$user->email}}" placeholder="E-mail Address" type="email" name="email" value="{{old('email')}}" required />
                            </div>
                               
                            <div class="form-group">
                                <label>Phone</label>
                                  <input id="phone" class="form-control" value="{{$user->phone}}" placeholder="Phone Number"  name="phone" value="{{old('phone')}}" required />
                            </div>
                                               
                                   <!-- User Role and status -->
                                   <div class="form-group">
                                       <label for="">Role</label>
                                        <select name="role" id="" class='form-control'>
                                            <option value="2">Select Role</option>
                                            {{-- <option value="1" @if( $user->role == 1) selected @endif>Admin</option> --}}
                                            <option value="2" @if( $user->role == 2) selected @endif>User</option>
                                            <option value="3" @if( $user->role == 3) selected @endif>Manager</option>

                                        </select>
                                    </div>

                                    
                                   
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-info">Save Change</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection

