@extends('layouts.master')

@section('title', 'Ez Travel')

@section('content')
    <div class="content">
        <div class="promotions">
            <div class="container">
                <h1>Welcome!</h1>
                <h2>{{$nilai}}</h2>

                @foreach($namanama as $user)
                    <li type="none">{{$user->id.'. '.$user->username.' '.$user->password}}</li>
                @endforeach
                {{--{!! $unescaped !!}--}}

                @if(count($namanama)>5)
                    <p>User lebih dari 5</p>
                @else
                    <p>User kurang dari 5</p>
                @endif
            </div>
        </div>
    </div>

@endsection