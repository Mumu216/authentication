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

                <table class="table table-bordered table-striped mg-b-0">
                    <thead class="thead-colored thead-dark">
                      <tr>
                        <th scope="col">#Sl</th>
                        <th scope="col">Image</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                         @foreach($brands as $brand)
                      <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>
                            @if(!empty($brand->image))
                              <img src="{{ asset('backend/img/brands/'  .  $brand->image) }}"  width="30">
                            @else
                              No image found.
                            @endif
                        </td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            @if($brand->status == 1)
                              <span class="badge badge-info">Active</span>
                            @elseif($brand->status == 0)
                              <span class="badge badge-primary">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="action-button">
                                <ul>
                                    <li><a href="{{ route('brand.edit' , $brand->id) }}"><i class="fa fa-edit"></i></a></li>
                                    <li><a href="" data-toggle="modal" data-target="#delete{{ $brand->id }}"><i class="fa fa-trash"></i></a></li>
                                 </ul>
                                 <!-- Modal start -->

                                 <div class="modal fade" id="delete{{ $brand->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Do you confirm to delete this Brand?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body text-center" >
                                        <div class="modal-buttons">
                                          <ul>
                                            <li>
                                              <form action="{{ route('brand.destroy' , $brand->id) }}" method="POST">
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
                                 <!-- Modal End -->


                            </div>
                        </td>
                    </tr>
                       @php $i++ ; @endphp
                       @endforeach
                    </tbody>
                </table>
                
                </div>
            </div>
        </div>
    </div>
</div>




  @endsection
