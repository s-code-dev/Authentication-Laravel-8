@extends('layouts.app')
@section('title')

    @parent -Новости категориЙ

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Главная</div>


                    @foreach ($news as $Category)
                        {{@dd($Category->slug);}}
                        <div style="width: 100%; height: 50px">
                            <a href="{{route('news.category.by_slug',['slug'=>$Category->slug])}}"
                               style="font-size: 18px; display: block; text-align: center">{{$Category->title}}</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


@endsection


