@extends('layout/admin/index')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('/admin/listCategory')}}">Category</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <form method="post" action="{{url('/admin/saveCategory')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên chuyên mục">
                </div>
                <button type="submit" name="addCategory" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <form method="post" action="{{url('/admin/saveCountry')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>World</label>
                    <input type="text" name="name" class="form-control" placeholder="Country">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</section>
<hr>
@endsection