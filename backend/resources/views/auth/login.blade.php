@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <nav class="panel panel-default">
                <div class="panel-heading">ログイン</div>
                <div class="panel-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $message)
                        <p>{{ $message }}</p>
                        @endforeach
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
                        </div>
                        <div class="form-group">
                            <label for="password">パスワード</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">ログイン</button>
                        </div>
                    </form>
                    <div class="text-right">
                        <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-danger" style="background-color: #dd4b39" role="button">
                            <i class="fab fa-google me-2"></i>Googleでログイン
                        </a>
                    </div>
                </div>
            </nav>
            <div class="text-center">
                <a href="{{ route('password.request') }}">パスワードの変更はこちらから</a>
            </div>
        </div>
    </div>
</div>
@endsection