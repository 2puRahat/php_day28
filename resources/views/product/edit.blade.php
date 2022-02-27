@extends('master')

@section('title')
    Edit Product Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center bg-warning">Edit Blog Form</div>
                        <div class="card-body">
                            <h4 class="text-success text-center">{{Session::get('messege')}}</h4>
                            <form action="{{route('update-product', ['id' => $product->id])}}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->name}}" name="name"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Category</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->category}}" name="category"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Brand</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->brand}}" name="brand"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->price}}" name="price"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Description</label>
                                    <div class="col-md-9">
{{--                                        <input type="text" class="form-control" value="{{$blog->description}}" name="description"/>--}}
                                        <textarea class="form-control" value="{{$product->description}}" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="{{$product->image}}" name="image"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Update Product"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


