@extends('layouts.app')
@section('content')
@include('layouts.main-body-top')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ action('PostController@index') }}">Posts</a></li>
                <li class="breadcrumb-item active">Create new Post</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @include('messages')
            <div class="card card-info w-75">
                <div class="card-header">
                    <h3 class="card-title">Create new Post</h3>
                </div>
                <form action="{{ action('PostController@createSave') }}" method="post" class="form-horizontal"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="title">Title</label>
                                <input type="text" name="txt_title" id="title" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="slug">Slug</label>
                                <input type="text" name="txt_slug" id="slug" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-3">
                                <label for="position">Position</label>
                                <input type="number" name="txt_position" id="position" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="parent_category">Category</label>
                                <select id="parent_category" class="form-control" name="sl_category_id">
                                    <option value="">Choose..</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-3">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control-file mt-1">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="description">Description</label>
                                <textarea name="txt_description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-12">
                                <label for="content">Content</label>
                                <textarea name="txt_content" id="content"></textarea>
                            </div>
                        </div>
                    </div>    
                    <div class="card-footer row">
                        <div class="col-lg-6">
                            <input type="submit" value="Create" class="btn btn-info">
                            <input type="reset" value="Reset" class="btn btn-default ml-2">
                        </div>
                        <div class="col-lg-6" align="right">
                            <a href="{{ action('PostController@index') }}" class="btn btn-secondary">
                                <i class="fa fa-arrow-alt-circle-left"></i>&nbsp;&nbsp; Back
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
<!-- ./wrapper -->
@endsection