@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>サーバーエラーが起きています。</p>
          <a href="{{ route('home') }}" class="btn btn-secondary">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
