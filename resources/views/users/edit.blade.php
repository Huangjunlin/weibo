@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>更新个人资料</h5>
            </div>
            <div class="card-body">

                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar"/>
                    </a>
                </div>

                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input class="form-control" type="text" name="email" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input class="form-control" type="password" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">密码：</label>
                        <input class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                    </div>
                    <button class="btn btn-primary" type="submit">更新</button>
                </form>

            </div>
        </div>
    </div>
@stop