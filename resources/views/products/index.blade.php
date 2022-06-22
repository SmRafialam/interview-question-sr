@extends('layouts.app')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products</h1>
    </div>


    <div class="card">
        <form action="" method="get" class="card-header">
            <div class="form-row justify-content-between">
                <div class="col-md-2">
                    <input type="text" name="title" placeholder="Product Title" class="form-control">
                </div>
                <div class="col-md-2">
                    <select name="variant" id="" class="form-control">
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

        <div class="card-body">
            <div class="table-response">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Variant</th>
                        <th width="150px">Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>1</td>
                        <td>Product Name <br> Created at : 8 hours ago</td>
                        <td>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</td>
                        <td>
                            <dl class="row mb-0" style="height: 40px; width: 100%; overflow: hidden" id="variant">

                                <dt class="col-sm-2 pb-0 d-flex justify-content-between">
                                    red/ red /
                                    
                                </dt>
                                <dt class="col-sm-2 pb-0 d-flex justify-content-between">
                                    xl/ sm/
                                </dt>
                                <dd class="col-sm-8">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 pb-0">Price : {{ number_format(150.00,2) }}</dt>
                                        <dt class="col-sm-4 pb-0 ">Price : {{ number_format(15.00,2) }}</dt>
                                        
                                    </dl>
                                    <dl>
                                    <dd class="col-sm-8 pb-0 ">InStock : {{ number_format(150.00,2) }}</dd>
                                    <dd class="col-sm-8 pb-0 ">InStock : {{ number_format(54.00,2) }}</dd>
                                    </dl>
                                </dd>
                            </dl>
                            <button onclick="$('#variant').toggleClass('h-auto')" class="btn btn-sm btn-link">Show more</button>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('product.edit', 1) }}" class="btn btn-success">Edit</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Product Two <br> Created at : 1 hour ago</td>
                        <td>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</td>
                        <td>
                            <dl class="row mb-0" style="height: 40px; width: 100%; overflow: hidden" id="variant">

                                <dt class="col-sm-2 pb-0 d-flex justify-content-between">
                                    red/ red /
                                    
                                </dt>
                                <dt class="col-sm-2 pb-0 d-flex justify-content-between">
                                    xl/ sm/
                                </dt>
                                <dd class="col-sm-8">
                                    <dl class="row mb-0">
                                        <dt class="col-sm-4 pb-0">Price : {{ number_format(150.00,2) }}</dt>
                                        <dt class="col-sm-4 pb-0 ">Price : {{ number_format(15.00,2) }}</dt>
                                        
                                    </dl>
                                    <dl>
                                    <dd class="col-sm-8 pb-0 ">InStock : {{ number_format(150.00,2) }}</dd>
                                    <dd class="col-sm-8 pb-0 ">InStock : {{ number_format(15.00,2) }}</dd>
                                    </dl>
                                </dd>
                            </dl>
                            <button onclick="$('#variant').toggleClass('h-auto')" class="btn btn-sm btn-link">Show more</button>
                        </td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('product.edit', 1) }}" class="btn btn-success">Edit</a>
                            </div>
                        </td>
                    </tr>

                    </tbody>

                </table>
            </div>

        </div>

        <div class="card-footer">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <p>Showing 1 to 10 out of 100</p>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>

@endsection
