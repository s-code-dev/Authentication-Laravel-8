@extends('layouts.app')
@section('title')

    @parent -Новости первой категории

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Главная</div>

                    @if(!empty($news) && !empty($news->first()->category->title))
                        <h4>{{$news->first()->category->title}}</h4>

                        @foreach ($news as $newsCtegory)
                            @if($newsCtegory->is_private == 1)
                                <figure class="figure">
                                    <img
                                        src="{{$newsCtegory->image ? $newsCtegory->image : 'http://placehold.it/100x100'}}"
                                        style="float: left; padding: 10px; margin: 0; width: 100px"
                                        class="figure-img img-fluid rounded" alt="Фото">
                                    <figcaption style="text-overflow: clip; overflow: hidden; height: 160px"
                                                class="figure-caption">{{$newsCtegory->spoiler}}
                                        <p>Ссылка на новость:</p><a href="{{$newsCtegory->link}} " target="_blank">Нажми для перехода на новость</a>
                                    </figcaption>


                                </figure>
                                <a style="float: right" href="/news/{{$newsCtegory->id}}">Подробнее.....</a>

                                <hr>

                            @else

                                Чтобы видеть новости зарегистрируйтесь

                            @endif


                        @endforeach


                    @else

                        Новостей нет

                    @endif


                        {{$news->links()}}

                </div>
            </div>
        </div>
    </div>


@endsection


