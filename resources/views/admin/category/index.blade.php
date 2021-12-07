@extends('layouts.admin_layout')

@section('title', 'Всі категориї')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Всі категориї</h1>
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
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          ID
                      </th>
                      <th>
                          Назва
                      </th>
                      <th style="width:30% "></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                  <tr>
                      <td>
                          {{ $category['id'] }}
                      </td>
                      <td>
                          {{ $category['title'] }}
                      </td>
                      
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category['id']) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Редагувати
                          </a>
                          <form action="{{ route('category.destroy', $category['id']) }}" method="POST" style="display:inline-block">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-danger btn-sm delete-btn">
                              <i class="fas fa-trash">
                              </i>
                              Видалити
                          </button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection