@extends('layout.main')

@section('content')
    <div class="d-flex align-items-end">
        <h2 class="display-5 ms-3 mb-3">{{ __('Latest products') }}</h2>
        <a class="ms-auto mb-3 btn btn-outline-primary" href="{{ route('product.total') }}">{{ __('All>>') }}</a>
    </div>
    <div class="row border-top border-bottom">
        @foreach ($products as $product)
            @include('product._item')
        @endforeach
    </div>
@endsection

