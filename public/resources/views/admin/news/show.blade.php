@extends('admin.layouts.app')
@section('title')

    @parent -Новости

@endsection
@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Главная</div>
                <div class="card-body">



                        @if(!$news->image)
                            <img src="http://placehold.it/300x300"
                                 style="float: left; padding: 10px; margin: 0; width: 300px"
                                 class="figure-img img-fluid rounded" alt="Фото">

                        @else

                            <img src="{{$news->image}}" style="float: left; padding: 10px; margin: 0; width: 300px"
                                 class="figure-img img-fluid rounded" alt="Фото">

                        @endif

                        <h5 style="float: left">{{$news->title}}</h5>
                        <p style="float: left">{{!!$news->text!!}}</p>
                        <p>Ссылка на новость:</p><a href="{{$news->link}}" target="_blank">Нажми для перехода на новость</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
