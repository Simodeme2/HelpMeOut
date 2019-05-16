@extends('layouts.app')

@section('content')
<div class="container__dashboard">
    <div class="card short">
        <div class="card__header">
            <h3>Aantal gebruikers</h3>
        </div>
        <div class="card__content">
                <h1>{{$countUser}}</h1>
        </div>
    </div>
    <div class="card short">
        <div class="card__header">
            <h3>Aantal projecten</h3>
        </div>
        <div class="card__content">
            Content
        </div>
    </div>
    <div class="card short">
        <div class="card__header">
            <h3>Users</h3>
        </div>
        <div class="card__content">
            Content
        </div>
    </div>
    <div class="card short">
        <div class="card__header">
            <h3>Users</h3>
        </div>
        <div class="card__content">
            Content
        </div>
    </div>
    <div class="card long-first">
        <div class="card__header">
            <h3>Users</h3>
        </div>
        <div class="card__content">
            Content
        </div>
    </div>
    <div class="card long-last">
        <div class="card__header">
            <h3>Gebruikers</h3>
        </div>
        <div class="card__content">
            @foreach($threeUsers as $threeUser)
                <p>{{$threeUser->firstname}} {{$threeUser->lastname}}</p>
            @endforeach
        </div>
    </div>
    <div class="card long-first">
        <div class="card__header">
            <h3>Users</h3>
        </div>
        <div class="card__content">
            <p>User 1</p>
            <p>User 2</p>
            <p>User 3</p>
        </div>
    </div>
    <div class="card long-last">
        <div class="card__header">
            <h3>Users</h3>
        </div>
        <div class="card__content">
            Content
        </div>
    </div>
</div>
@endsection
