
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Панель администратора:</div>

                    <div class="panel-body">

                        @if(session('message'))
                            <div class="alert alert-danger">
                                {{session('message')}}
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{--@foreach($users as $user)
                                {{$user['name']}}<br>
                            @endforeach--}}
                        {{--<pre>{{print_r($currentUser)}}</pre>--}}

                            <ul {{--style="padding: 0px 0px 0px 0px"--}}>
                                <li>
                                   <a href="{{route('users')}}">
                                        <pre>Пользователи</pre>
                                   </a>
                                </li>

                                <li>
                                   <a href="{{route('news')}}">
                                        <pre>Новости</pre>
                                   </a>
                                </li>
                            </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection