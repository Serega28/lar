@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('newsAdd')}}">Добавить новость</a><br>
                        <pre>Список новостей:</pre>
                    </div>

                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @foreach($news as $newsItem)
                            {{$newsItem['name']}}<br>
                            {{$newsItem['text']}}<br>
                            <a href="{{route('newsEdit', $newsItem['id'])}}">Редактировать</a><br>
                            <hr>
                        @endforeach
                        {{--<pre>{{print_r($currentUser)}}</pre>--}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection