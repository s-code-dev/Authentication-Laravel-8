@extends('layouts.app')
@section('title')

    @parent -{{$title}}

@endsection
@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$title}}</div>

                <div class="card-body">


                        @forelse($news as $item)

                            @if($item->is_private == 1 || !empty(Auth::id()))

                                <figure class="figure">
                                    <h4>{{$item->title}}</h4>
                                    @if(!$item->image)
                                        <img src="http://placehold.it/100x100"
                                             style="float: left; padding: 10px; margin: 0"
                                             class="figure-img img-fluid rounded" alt="Фото">

                                    @else

                                        <img src="{{$item->image}}" style="float: left; padding: 10px; margin: 0; width: 200px"
                                             class="figure-img img-fluid rounded" alt="Фото">

                                    @endif
                                    <figcaption style="text-overflow: clip; overflow: hidden; height: 160px"
                                                class="figure-caption">{{$item->spoiler}}
                                        <p>Ссылка на новость:</p><a href="{{$item->link}}" target="_blank">Нажми для перехода на новость</a>
                                    </figcaption>
                                </figure>
                                <a style="display: block" href="/news/{{$item->id}}">Подробнее.....</a>

                                <hr>

                            @else
                                <h4 style="height: 100px; display: block; text-align: center">Чтобы видеть эти новости зарегистрируйтесь на сайте</h4>
                            @endif

                        @empty

                            Новостей нет

                        @endforelse








                     {{$news->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

