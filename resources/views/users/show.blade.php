@extends ('layouts.app')

@section ('content')
    <div class="col-md-9 center"> 
        <div class="container__custom">
            <div class="card">
            <a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
            <a href="#" class="btn btn-danger">Remove</a>
        </div>
        <div class="card-footer text-muted">
            Last updated: {{ $user->updated_at }}
        </div>
        </div>
    </div>

@endsection