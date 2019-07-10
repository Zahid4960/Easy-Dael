{{-- entends AdminMaster page --}}
@extends('Backend.Admin.AdminMaster')

{{-- admin content section --}}
@section('AdminContent')

{{-- card start --}}
<div class="col-md-9 sidebar_margin_top">
  <div class="card">
    <div class="card-body">
        <div class="container">
          <hr>
          <h2 style="text-align: center;">Product Details Upload</h2>
          <hr>
          {{-- form start --}}
          <form style=" padding: 4%;">
            <div class="form-group">
              <label>Product Title</label>
              <input type="name" class="form-control" name="title"  placeholder="Enter product title" required>
            </div>
            <div class="form-group">
              <label>Product Description</label>
              <textarea  class="form-control" name="description"  placeholder="Enter product description"  required></textarea>
            </div>
            <div class="form-group">
              <input  class="form-control" id="password" placeholder="Enter product quantity" required>
            </div>
            <div class="form-group">
              <label>Product Price</label>
              <input  class="form-control" id="password" placeholder="Enter product price" required>
            </div>
            <div class="form-group">
              <label>Product Offer Price</label>
              <input  class="form-control" id="password" placeholder="Enter product offer price" required>
            </div>
            <button style="margin-top: 1%;" type="submit" class="btn btn-outline-info  btn-block">Upload Product Details</button>
          </form>
          {{-- form end  --}}
        </div>
    </div>
  </div>
</div>
</div>
</div>
{{-- end of card --}}


{{-- end of admin content section --}}
@endsection
