@extends('admin.layouts.app')

@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить новость</div>

                <div class="card-body">
                    <a href="{{ route('admin.news.create')}}" style="margin: 30px; " class="btn btn-success">Добавить новость</a>


                        @forelse($news as $item)

                            <figure class="figure" style="display: block">
                                <h4>{{$item->title}}</h4>
                                @if(!$item->image)
                                    <img src="http://placehold.it/100x100"
                                         style="float: left; padding: 10px; margin: 0"
                                         class="figure-img img-fluid rounded" alt="Фото">

                                @else

                                    <img src="{{$item->image}}" style="float: left; padding: 10px; margin: 0"
                                         class="figure-img img-fluid rounded" alt="Фото">

                                @endif
                                <figcaption style="text-overflow: clip; overflow: hidden; height: 160px"
                                            class="figure-caption">{{$item->spoiler}}
                                    <p>Ссылка на новость:</p><a href="{{$item->link}} " target="_blank">Нажми для перехода на новость</a>
                                </figcaption>


                            </figure>
                            <div style="display: inline-block">
                                <a href="{{ route('admin.news.edit',$item) }}" type="button" class="btn btn-primary">Редактировать</a>
                                <a href='{{route('admin.news.destroy',$item)}}' class="btn btn-danger"

                                   onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">


                                    Удалить</a>

                                <form id="delete-form" action="{{ route('admin.news.destroy',$item)}}" method="POST" style="display: none;">

                                    @method('DELETE')
                                    @csrf
                                </form>
                                <a style=" margin-left: 50px" href="{{route('admin.news.show',[$item->id])}}">Подробнее.....</a>

                                <hr>

                            </div>


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


