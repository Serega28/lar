@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Редактирование записи</div>
                    <div class="panel-body">
                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
                        <form method="post" action="{{route('newsEdit_n')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="id" value="{{$news->id}}">

                            <div class="form-group">
                                <label for="name">Заголовок:</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$news->name}}">
                            </div>
                            <div class="form-group">
                                <label for="image">Изображение:</label>
                                <input type="text" class="form-control" id="image" name="image" value="{{$news->image}}">
                            </div>
                            <div class="form-group">
                                <label for="text">Текст:</label>
                                <textarea  class="form-control" id="text" name="text" rows="3">{{$news->text}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()