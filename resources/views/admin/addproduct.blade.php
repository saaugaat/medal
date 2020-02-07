@extends('layouts.frame')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="/product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label>Product Name:</label>
                      <input type="text" class="form-control"  name="product_name">
                    </div>
                    <div class="form-group">
                      <label>Price:</label>
                      <input type="text" class="form-control" name="price">
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <Textarea class="form-control" name="description"></Textarea>
                      </div>


                    <div class="form-group">
                        <label>Upload product image Here</label>
                        <input type="file" class="form-control-file" name="product_img">
                      </div>

                    <button type="submit" class="btn btn-success">Add product</button>
                  </form>

            </div>
        </div>
    </div>




@endsection






