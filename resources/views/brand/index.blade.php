@extends('layouts.app')
@section('content')

<div class="flex-center position-ref full-height">
        <div class="content">
          <div class="title m-b-md">Product Store</div>
          <div class="links">
            <a href="./brand/create">Create Product</a>
            <a href="./brand">View Products</a>
          </div>
          @foreach ($brands as $item)
            {{ $item->name }}    
          @endforeach
          <div class="container-fluid">
              <button class='btn btn-default'>OK</button>
          </div>
        </div>
      </div>

@endsection