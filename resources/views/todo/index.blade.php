@extends('layouts.app') @section('title','todo') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <strong>Manage Todo</strong>
                    <a href="/todo/add" class="btn btn-primary">Add Todo</a>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                    </ul>
                </div>
                @if(session()->has('ms'))
                <div class="alert alert-success">
                    {{ session()->get('ms') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection