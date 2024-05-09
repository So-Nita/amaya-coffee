@extends('dashboard.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Categories</li>
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
            <button class="btn btn-primary">Create New <i class="fa-solid fa-plus"></i></button>
          </div>
        </div>
        <!-- Table to display categories -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Created At</th>
                      <!-- Add more headers if needed -->
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                      <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td><img src="{{ $category->image }}" height="50" alt=""></td>
                        <td>{{ $category->createdAt }}</td>
                        <!-- Add more columns if needed -->
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
@endsection
