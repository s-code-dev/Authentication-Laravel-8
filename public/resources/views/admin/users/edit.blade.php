@extends('admin.layouts.app')
@section('title')

    @parent -Новости

@endsection
@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>
                <div class="card-body">

                    <user-edit-component
                        :initial-user="{{json_encode($user)}}">

                    </user-edit-component>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
