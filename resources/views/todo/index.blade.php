 @extends('layouts.app') @section('title','todo') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <strong>Manage Todo</strong>
                    <div class="btn-group float-right">
                        <a href="/todo/add" class="btn btn-primary">Add Todo</a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($todos as $todo)
                        <li class="list-group-item">{{$todo->title}}
                            <a href="/todo/edit/{{$todo->id}}" class="btn btn-warning float-right">Edit</a>
                            <span class="float-right badge bagde-primary">{{$todo->created_at->diffForHumans()}}</span>
                        </li>
                        @empty
                        <h3 class="text-center">Coming Soon...</h3>
                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection