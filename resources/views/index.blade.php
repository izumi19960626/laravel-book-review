@extends('layouts.app')

<link href="{{ asset('css/top.css') }}" rel="stylesheet">

@section('content')
<div class="top row justify-content-center">
  @foreach($reviews as $review)
    <div class="col-xs-12 col-lg-4">
        <div class="card mt-5 mb50 p20">
            <div class="card-body">
              @if(!empty($review->image))
              　<div class='image-wrapper'><img class='book-image' src="{{ asset('storage/images/'.$review->image) }}"></div>
              @else
                <div class='image-wrapper'><img class='book-image' src="{{ asset('images/dummy.png') }}"></div>
              @endif
                <h3 class='h3 book-title'>{{ $review->title }}</h3>
                <p class='description'>
                    {{ $review->body }}
                </p>
                <a href="{{ route('show',['id'=>$review->id]) }}" class='text-center detail-btn mt-5'>詳細を読む</a>
            </div>
        </div>
    </div>
   @endforeach
</div>
{{ $reviews->links() }}
@endsection