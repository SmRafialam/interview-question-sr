@extends('layouts.app')

@section('content')
<form action="" method="get" class="card-header">
            <div class="form-row justify-content-between">
                <div class="col-md-2">
                    <input type="text" name="title" placeholder="Product Title" class="form-control">
                </div>
                <div class="col-md-2">
                    <select name="variant" placeholder="Color" id="" class="form-control">
                        <option value="" class="text-secondary">-------Color-------</option>
                        <option value="red">red</option>
                        <option value="green">green</option>
                        <option value="blue">blue</option>
                        <option value="" class="text-secondary">-------Size--------</option>
                        <option value="XL">XL</option>
                        <option value="M">M</option>
                        <option value="SM">SM</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Price Range</span>
                        </div>
                        <input type="text" name="price_from" aria-label="First name" placeholder="From" class="form-control">
                        <input type="text" name="price_to" aria-label="Last name" placeholder="To" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="date" name="date" placeholder="Date" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary float-right"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>

        
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 my-2">Create Product</h1>
    </div>
    <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>
    </div>

    <div class="br-pagebody border">
        <div class="row row-sm">
          <div class="col-sm-6">
              <div class="card p-3 shadow-base">
                <form action=" {{Route('store')}} " method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Product Name</label>
                                <input class="form-control" type="text" placeholder="Product Name" name="title" id="title" value="{{ old('title') }}">
                                <span class="text-danger">
                                @error('title')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="sku">Product SKU</label>
                                <input class="form-control" type="text" placeholder="Product Name" name="sku" id="sku" value="{{ old('sku') }}">
                                <span class="text-danger">
                                @error('sku')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>
                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea placeholder="Enter Product Description" class="form-control" name="description" id="description" cols="30" rows="4">{{ old('description') }}</textarea>
                                <span class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                                </span>
                            </div>
                            
                        </div>
                    </div>
                </form>
              </div>
                  
          </div>
        </div>
      
        <div class="container border">
            <div class="row row-sm">
                <div class="col-sm-6">
                    <div class="card2">
                        <div class="card-header2">
                            Media
                        </div>
                        <div class="card-body2">
                            <form method="POST" action="{{ Route('dropzonestore') }}" enctype="multipart/form-data" class="dropzone dz-clickable" id="image-upload">
                            @csrf
                            <div>
                                <h3 class="text-danger">Dropzone</h3>
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action=" {{Route('store')}} " method="post">
                    @csrf
        <div class="form-group d-flex  justify-content-start my-2 py-5">
            <button class="form-control btn-sm btn-info mx-2 " style='width:100px;'>Save</button>
            <button class="form-control btn bg-secondary" style='width:100px;'>Cancel</button>
        </div>
    </form>
        </div>
      <div class="card-footer">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p>Showing 1 to 2 out of 7</p>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>   
@endsection


