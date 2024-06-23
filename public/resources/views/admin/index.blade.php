@extends('admin.layouts.app')
@section('title')

    @parent -Главная страница

@endsection
@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Главная Админки</div>

                <li class="list-group-item">
                    <a href="{{ route("admin.news.index") }}">Редактировать новости</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('admin.users.index') }}">Редактировать пользователей</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('admin.parser.index') }}">Пропарсить новости</a>
                </li>
            </div>
        </div>
    </div>
</div>
@endsection
