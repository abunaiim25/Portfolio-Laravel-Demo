@extends('layouts.admin_layout')

@section('title')
    Services Edit
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Services Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>



            <form action="{{ url('admin-services-update/'.$services->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="form-group col-md-8 mt-3">

                        <div class="mb-3">
                            <label for="icon">
                                <h4>Font Awesome Icon</h4>
                            </label>
                            <input type="text" class="form-control" id="icon" name="icon" value="{{$services->icon}}">
                        </div>

                        <div class="mb-3">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$services->title}}">
                        </div>

                        <div class="mb-3">
                            <label for="description">
                                <h4>Description</h4>
                            </label>
                            <textarea type="text" class="form-control" id="description" name="description" >{{$services->description}}</textarea>
                        </div>
                    </div>

                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">


            </form>

        </div>

    </main>
@endsection
