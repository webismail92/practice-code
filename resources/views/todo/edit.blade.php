@extends('layouts.app') @section('title','edit | todo') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <strong>Edit Todo</strong>
                    <div class="btn-group float-right">
                        <a href="/todo" class="btn btn-primary">Manage Todo</a>
                        <a href="/todo/add" class="btn btn-primary">Add Todo</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h6>Todo Title</h6>
                                <input type="text" class="form-control" required="required" value="{{$todo->title}}" name="title" id="title" placeholder="Event Title" />
                            </div>

                            <div class="col-sm-12 form-group">
                                <h6>Description</h6>
                                <textarea class="form-control" rows="5" name="description" id="description" placeholder="Description">{{$todo->description}}</textarea>

                                <div class="col-sm-12 mt-4 form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-md">Update Todo &raquo;</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection