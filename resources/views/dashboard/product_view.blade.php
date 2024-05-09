@extends('dashboard.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Table to display products -->
        <div class="row mb-3 px-3">
          <div class="col-12 d-flex justify-content-end ">
            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Create New <i class="fa-solid fa-plus"></i></a>
          </div>
        </div>
        {{-- Table --}}
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Description</th>
                      <th>Category</th>
                      <th>Cost</th>
                      <th>Quantity</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody >
                    @foreach($products as $product)
                      <tr style="">
                        <td class="px-0 py-1"> <img src="{{ $product->image }}" class=" ml-1" width="55" alt=""> </td>
                        {{-- <td>{{ $product->id }}</td> --}}
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->cost }}</td>
                        <td>{{ $product->qty }}</td>
                        <td style="width: 170px"> 
                          <div class="row">
                            <div class="col-5">
                              <a href="#" class="btn btn-primary">Edit</a>
                            </div>
                            <div class="col-7" style="padding-right: 20px">
                              <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- Modal Create --}}
  {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLongTitle">Create New Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="productName">Product Name</label>
              <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
              <label for="productPrice">Price</label>
              <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" min="0" required>
            </div>
            <div class="form-group">
              <label for="categorySelect">Select Category</label>
              <select class="form-control" id="categorySelect" required>
                
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

              </select>
            </div>
            <div class="form-group">
              <label for="productDescription">Description</label>
              <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
            </div>
            <div class="form-group">
              <label for="productImage">Upload Image</label>
              <input type="file" class="form-control-file" id="productImage">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div> --}}
{{-- End Modal --}}
{{-- Modal Create --}}
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Create New Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="createProductForm">
            <div class="form-group">
              <label for="productName">Product Name</label>
              <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
              <label for="productPrice">Price</label>
              <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" required min="0">
            </div>
            <div class="form-group">
              <label for="categorySelect">Select Category</label>
              <select class="form-control" id="categorySelect" required>
                
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

              </select>
            </div>
            <div class="form-group">
              <label for="productDescription">Description</label>
              <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description"></textarea>
            </div>
            <div class="form-group">
              <label for="productImage">Upload Image</label>
              <input type="file" class="form-control-file" id="productImage" name="productImage" accept="image/*">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveProductBtn">Save</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal --}}

  <script>
    document.getElementById('saveProductBtn').addEventListener('click', function() {
      var productName = document.getElementById('productName').value;
      var productPrice = document.getElementById('productPrice').value;
      var categoryId = document.getElementById('categorySelect').value;
      var productDescription = document.getElementById('productDescription').value;
      var productImage = document.getElementById('productImage').files[0];
      
      const myHeaders = new Headers();
      myHeaders.append("Content-Type", "application/json");

      const raw = JSON.stringify({
        "name": productName,
        "price": productPrice,
        "description": productDescription,
        "image": "https://www.amayatheme.redsun.design/roastery/wp-content/uploads/sites/2/2020/01/Cups.jpg",
        //"image": productImage,
        "category_id": categoryId,
        "cost": 0,
        "qty": 1200
      });
      console.log(raw);

      const requestOptions = {
        method: "POST",
        headers: myHeaders,
        body: raw,
        redirect: "follow"
      };

      fetch("http://127.0.0.1:8000/api/product", requestOptions)
        .then(response => {
          if (response.ok) {
            return response.json(); // Parse response JSON
          }
          throw new Error('Network response was not ok.');
        })
        .then((result) => {
          console.log(result)
          console.log('Product created successfully');
          // setTimeout(function() {
          //   window.location.reload();
          // }, 1000); // 1000 milliseconds = 1 second
        })
        .catch((error) => {console.error(error); preventDefault(); });
      });
  </script>
  

@endsection

