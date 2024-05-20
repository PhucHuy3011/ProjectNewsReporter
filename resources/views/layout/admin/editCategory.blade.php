@extends('layout/admin/index')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Category</h1>
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
        <form method="post" action="{{url('/admin/updateCategory')}}" >
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <input type="hidden" name="id" value="{{$category->id}}">
            </div>
        </form>
    </div>
</section>
@endsection