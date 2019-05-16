@extends('layouts.app')

@section('content')
<div class="col-md-12"> 
    <div class="container__custom">
        <div class="card">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>Geregistreerd op</th>
                    <th>Credits</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{$user->id}}
                        </td>
                        <td>
                            {{$user->firstname}} {{$user->lastname}}
                        </td>
                        <td>
                            {{$user->street}} {{$user->streetnumber}} {{$user->zipcode}} {{$user->city}}
                        </td>
                        <td>
                            {{$user->created_at}}
                        </td>
                        <td>
                            {{$user->credit}}
                        </td>
                        <td>
                            <a href="users/{{ $user->id }}" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {!! $users->links(); !!}
            </div>
        </div>
    </div>
</div>
@endsection
