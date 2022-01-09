@extends('layout.main')

@section('content')
<h2 class="display-5 mb-3">{{ __('Latest products') }}</h2>
<div class="row border-top border-bottom">
    @foreach ($products as $product)
        <div class="col-md-4 mx-auto">
            <div class="card my-4">
                <div class="card-body">
                    <img src="{{ $product->picture }}">
                    <h3 class="text-center"> {{ $product->name }}</h2>
                    <p class="text-center">{{ __('Price') }}: {{__('$')}}{{ $product->price }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection

