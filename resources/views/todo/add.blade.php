@extends('layouts.app') @section('title','todo') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <strong>Add Todo</strong>
                    <a href="/todo" class="btn btn-primary">Manage Todo</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="/todo/add" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h6>Todo Title</h6>
                                <input type="text" class="form-control" required="required" value="{{old('title')}}" name="title" id="title" placeholder="Event Title" />
                            </div>

                            <div class="col-sm-12 form-group">
                                <h6>Description</h6>
                                <textarea class="form-control" rows="5" name="description" id="description" placeholder="Description">{{old('description')}}</textarea>

                                <div class="col-sm-12 mt-4 form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-md">Add Todo &raquo;</button>
                                </div>

                            </div>
                        </div>
                    </form>

                    <br> @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection