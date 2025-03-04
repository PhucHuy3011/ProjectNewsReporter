@extends('layout/admin/index')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{url('admin/index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Name</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Edit</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr role="row" class="">
                                        <td class="sorting_1">{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td style="text-align: center;">
                                            <a href="{{url('admin/editCategory/'.$category->id)}}">
                                                <span class="badge bg-primary">
                                                    <ion-icon name="create-outline"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    </ion-icon>
                                                </span>
                                            </a>
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="{{url('admin/deleteCategory/'.$category->id)}}" onclick="return confirm('Are you sure you want to delete this category?')">
                                                <span class="badge bg-danger">
                                                    <ion-icon name="trash-outline"><i class="fa fa-minus-circle" aria-hidden="true"></i>
                                                    </ion-icon>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Country</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Edit</th>
                                        <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($countries as $country)
                                    <tr role="row" class="">
                                        <td class="sorting_1">{{$country->id}}</td>
                                        <td>{{$country->name}}</td>
                                        <td style="text-align: center;">
                                            <a href="{{url('admin/editCountry/'.$country->id)}}">
                                                <span class="badge bg-primary">
                                                    <ion-icon name="create-outline"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    </ion-icon>
                                                </span>
                                            </a>
                                        </td>
                                        <td style="text-align: center;">
                                            <a href="{{url('admin/deleteCountry/'.$country->id)}}" onclick="return confirm('Are you sure you want to delete this country?')">
                                                <span class="badge bg-danger">
                                                    <ion-icon name="trash-outline"><i class="fa fa-minus-circle" aria-hidden="true"></i>
                                                    </ion-icon>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
</div>

@endsection