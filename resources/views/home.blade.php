@extends('layouts.front')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <h1 class="my-4">Shop Catalog</h1>
      <div class="list-group">
        @foreach($categories as $category)
          <a href="{{ route('home') }}?category={{ $category->id }}" class="list-group-item{{ request()->input('category') == $category->id ? ' active' : '' }}">
            {{ $category->name }}
          </a>
        @endforeach
      </div>

    </div>
    <div class="col-lg-9">
      <div class="row mt-4">
        @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#">
                <img class="card-img-top" src="{{ $product->photo ? $product->photo->url : 'http://placehold.it/700x400' }}" alt="">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $product->name }}</a>
                </h4>
                <h5>$ {{ $product->price }}</h5>
                <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row">
          {{ $products->appends(request()->query())->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
