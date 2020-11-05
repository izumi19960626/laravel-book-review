@extends('layouts.app')

 <link href="{{ asset('css/show.css') }}" rel="stylesheet">

@section('content')
<div class="review container">
  <h1 class='pagetitle text-center'>レビュー詳細ページ</h1>
  <div class="card">
    <div class="card-body d-flex">
      <aside class='review-image'>
@if(!empty($review->image))
        <img class='book-image' src="{{ asset('storage/images/'.$review->image) }}">
@else
        <img class='book-image' src="{{ asset('images/dummy.png') }}">
@endif
      </aside>
      <section class='review-main'>
        <h2 class='h2'>・本のタイトル</h2>
        <p class='h2 mb20'>{{ $review->title }}</p>
        <h2 class='h2'>・この本のレビュー</h2>
        <p>{{ $review->body }}</p>
      </section>  
    </div>
    <a href="{{ route('index') }}" class='btn btn-dark btn-back mb20'>一覧へ戻る</a>
  </div>
</div>
@endsection