@extends('backend.layout.template');

@section('body-content')

<div class="br-pagetitle">
    <i class="icon ion-ios-home-outline"></i>
    <div>
      <h4>Manage Brands</h4>
      <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
    </div>
  </div>


  <div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="br-section-label">Basic Table</h6>
          <div class="bd bd-gray-300 rounded ">
            <div class="row">
               <div class="col-lg-12">
                        

                    <table class="table table-bordered mg-b-0">
                        <thead class="thead-colored thead-info">
                            <tr>
                                <th>NO</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1 @endphp
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$i}}</th>
                                
                                <td>
                                    @if( !empty($user->image ))
                                        <img src="{{asset('image/'. $user->image)}}" width="40px"  alt="">
                                    @else
                                        -N/A-
                                    @endif
                                </td>
                                <td>{{$user->name}}</td>
                                <td>
                                    @if( !empty($user->email))
                                        {{$user->email}}
                                    @else
                                        -N/A-
                                    @endif
                                </td>
                                <td>
                                    @if( !empty($user->phone))
                                        {{$user->phone}}
                                    @else
                                        -N/A-
                                    @endif
                                </td>
                                <td>
                                    @if($user->role == 1)
                                      <span class="badge badge-info">Admin</span>
                                    @elseif($user->role == 2)
                                      <span class="badge badge-success">User</span>
                                    @elseif($user->role == 3)
                                      <span class="badge badge-primary">Manager</span>
                                   @endif
                                </td>
                                <td style='width:180px;'>
                                <div>
                                    <a href="{{route('user.edit', $user->id)}}" class='btn btn-primary btn-sm text-white'><i class='fa fa-edit'></i> EDIT</a>
                                    <a  class='btn btn-danger btn-sm text-white' data-toggle="modal" data-target="#delModal{{$user->id}}"><i class="fa fa-trash"></i> DELETE</a>
                                </div>
                                <div>
                                    <!-- modal start  -->
                                    <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Do you confirm to delete this User?</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body text-center" >
                                              <div class="modal-buttons">
                                                <ul>
                                                  <li>
                                                    <form action="{{ route('user.destroy' , $user->id) }}" method="POST">
                                                      @csrf
                                                      <input type="submit" name="delete" class="btn btn-success" value="Confirm">
                                                    </form>
                                                  </li>
                                                  <li><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      {{-- model end --}}

                                </div>
                                    

                                </td>

                            </tr>

                              
                            @php $i++ @endphp
                            @endforeach
                           
                        </tbody>
                        @if( $users->count() > 0)
                        @else
                            <div class="alert alert-info text-center">No Users Found</div>
                        @endif
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>

@endsection

