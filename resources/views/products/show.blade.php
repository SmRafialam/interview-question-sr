@extends('layouts.app')
@section('content')

<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Products</h4>
          <p class="mg-b-0">Show your all Products</p>
        </div>
      </div>
      <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-12">
              <div class="card p-3 shadow-base">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#Sl</th>
                            <th>title</th>
                            <th>sku</th>
                            <th>description</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @php $sl=1; @endphp
                        @foreach($products as $data)
                        
                        <tr>
                            <td> {{ $sl }} </td>
                            <td> {{ $data->title }} </td>
                            <td> {{ $data->sku }} </td>
                            <td> {{ $data->description }} </td>
                            
                            
                            <td> <a href="{{ Route('edit',$data->id) }}" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> </a> 
                            </td>
                        </tr>
                        <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Confirmation Message</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete this product?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                        @php $sl++; @endphp
                        @endforeach
                    </tbody>
                </table>
              </div>
                  
          </div>
        </div>
      </div>
      @endsection