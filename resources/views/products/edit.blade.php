@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product</h1>
    </div>
    <div id="app">
        <create-product :variants="{{ $variants }}">Loading</create-product>
    </div>

    <div class="br-pagebody">
        <div class="row row-sm">
          <div class="col-sm-6">
              <div class="card p-3 shadow-base">
                <form action=" {{Route('show',$product->id)}} " method="post">
                    @csrf
                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Product Name</label>
                                <input class="form-control" type="text" placeholder="Product Name" name="title" id="title" value="{{ $product->title }}">
                                <span class="text-danger">
                                
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="sku">Product Name</label>
                                <input class="form-control" type="text" placeholder="Product sku" name="sku" id="sku" value="{{ $product->sku }}">
                                <span class="text-danger">
                                
                                </span>
                            </div>
                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea placeholder="Enter Product Description" class="form-control" name="description" id="description" cols="30" rows="4">{{ $product->description }}</textarea>
                                <span class="text-danger">
                                
                                </span>
                            </div>
                            
                            <div class="form-group">
                                <button class="form-control btn btn-info">Update Product</button>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
                  
          </div>
        </div>
      </div>
      

@endsection
