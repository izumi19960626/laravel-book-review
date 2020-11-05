@extends('layouts.app')

<link href="{{ asset('css/review.css') }}" rel="stylesheet">

@section('content')
 <div class="review">
 <h1 class='pagetitle text-center'>レビュー投稿ページ</h1>
@if($errors->any())
 <div class="alert alert-danger">
 	<ul>
 		@foreach($errors->all() as $error)
 		 <li>{{ $error }}</li>
 		@endforeach
 	</ul>
 </div>
@endif
 <div class="row justify-content-center container">
    <div class="col-md-10">
      <form method='POST' action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>本のタイトル</label>
                <input type='text' class='form-control' name='title' placeholder='タイトルを入力してください'>
              </div>
              <div class="form-group">
              <label>レビュー本文</label>
                <textarea class='description form-control' name='body' placeholder='本文を入力を入力してください'></textarea>
              </div>
              <div class="form-group">
                <label for="file1">本の画像</label>
                <input type="file" id="file1" name='image' class="form-control-file">
              </div>
              <input type='submit' class='review-btn' value='レビューを投稿する'>
            </div>
        </div>
      </form>
    </div>
 </div>
</div>
@endsection