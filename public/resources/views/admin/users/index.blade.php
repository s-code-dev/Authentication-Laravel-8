@extends('admin.layouts.app')

@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить новость</div>

                <div class="card-body">
                    <a href="{{ route('admin.users.create')}}" style="margin: 30px; " class="btn btn-success">Добавить пользователя</a>


                        @forelse($users as $user)

                            <figure class="figure" style="display: block">
                                <h4>{{$user->title}}</h4>
                                @if(!$user->image)
                                    <img src="http://placehold.it/100x100"
                                         style="float: left; padding: 10px; margin: 0"
                                         class="figure-img img-fluid rounded" alt="Фото">

                                @else

                                    <img src="{{$user->image}}" style="float: left; padding: 10px; margin: 0"
                                         class="figure-img img-fluid rounded" alt="Фото">

                                @endif
                                <figcaption style="text-overflow: clip; overflow: hidden; height: 160px"
                                            class="figure-caption">{{$user->name}}
                                </figcaption>

                                <p>{{$user->email}}</p>


                            </figure>
                            <div style="display: inline-block">
                                <a href="{{ route('admin.users.edit',$user) }}" type="button" class="btn btn-primary">Редактировать</a>
                                <a href='{{route('admin.users.destroy',$user)}}' class="btn btn-danger"

                                   onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">


                                    Удалить</a>

                                <form id="delete-form" action="{{ route('admin.users.destroy',$user)}}" method="POST" style="display: none;">

                                    @method('DELETE')
                                    @csrf
                                </form>
                                <a style=" margin-left: 50px" href="{{route('admin.users.show',[$user->id])}}">Подробнее.....</a>

                                <hr>

                            </div>


                        @empty

                            Новостей нет

                        @endforelse


                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


