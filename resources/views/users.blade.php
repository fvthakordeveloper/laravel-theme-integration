@extends('layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Users
                </h3>
                
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <td>Rahul</td>
                        <td>rahul@gmail.com</td>
                        <td>rahul</td>
                      </tr>
                      <tr>
                        <th>2</th>
                        <td>Kalpesh</td>
                        <td>kalpesh@gmail.com</td>
                        <td>kalpesh</td>
                      </tr>
                      <tr>
                        <th>3</th>
                        <td>Vihaan</td>
                        <td>vihaan@gmail.com</td>
                        <td>vihaan</td>
                      </tr>
                      <tr>
                        <th>4</th>
                        <td>Ronak</td>
                        <td>ronak@gmail.com</td>
                        <td>ronak</td>
                      </tr>
                      <tr>
                        <th>5</th>
                        <td>Kartik</td>
                        <td>kartik@gmail.com</td>
                        <td>kartik</td>
                      </tr>
                    </tbody>
                  </table>
                  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          
        </div>
        <!-- /.row (main row) -->
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection