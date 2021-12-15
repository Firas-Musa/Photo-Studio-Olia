@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить статью</h1>
          </div><!-- /.col -->  
        </div><!-- /.row -->
        @if (session('succes'))
            <div class="alert alert-succes" role="alert">
                <button type="button" class="close" data-dismis="alert" aria-hidden="true">x</button>
                <h4><i class="icon fa fa-chek"></i>{{ session('succes') }}</h4>
            </div>
        @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="card card-primary">
              <!-- form start -->
              <form action="{{ route('post.store') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Назва</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введіть назву категорії" required>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Додати</button>
                </div>
              </form>
            </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection