@extends('layout.main')

@section('content')
    <h2 class="display-5 mb-3">{{ __('All items') }}</h2>
    <div class="row border-top border-bottom">
    @foreach ($products as $product)
        @include('product._item')
    @endforeach
@endsection