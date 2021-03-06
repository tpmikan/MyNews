@extends('layouts.front')

@section('content')
<div class="container">
    <hr color="#c0c0c0">
    @if (!is_null($headline))
      <div class="row">
        <div class="headline col-md-10 mx-auto">
            <div class="col-md-6">
              <div class="name mx-auto">
                <h1>{{ str_limit($headline->name, 50) }}</h1>
              </div>
            </div>
            <div class="col-md-6">
              <p class="gender mx-auto">性別：{{ str_limit($headline->gender, 50) }}</p>
            </div>
            <div class="col-md-6">
              <p  class="hobby mx-auto">趣味：{{ str_limit($headline->hobby, 250) }}</p>
            </div>
            <div class="col-md-10">
              <p class="introduction mx-auto">自己紹介欄：{{ str_limit($headline->introduction, 1600) }}</p>
            </div>
        </div>
      </div>
    @endif
    <hr color="#c0c0c0">
    <div class="row">
      <div class="posts col-md-8 mx-auto mt-3">
        @foreach ($posts as $post)
          <div class="post">
            <div class="row">
              <div class="text col-md-6">
                <div class="date">
                  {{ $post->updated_at->format('Y年m月d日') }}
                </div>
                <div class="name">
                  {{ str_limit($post->name, 50) }}
                </div>
                <div class="gender">
                  性別：{{ str_limit($post->gender, 50) }}
                </div>
                <div class="hobby">
                  趣味：{{ str_limit($post->hobby, 250) }}
                </div>
                <div class="introduction">
                  自己紹介欄：{{ str_limit($post->introduction, 1600) }}
                </div>
              </div>
            </div>
          </div>
          <hr color="#c0c0c0">
        @endforeach
      </div>
    </div>
  </div>
@endsection