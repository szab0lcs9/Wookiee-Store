@extends('layout.main')

@section('content')
    <h1 class="display-5 ms-3 mb-3">{{ __('My products in the store') }}</h1>
        <div class="row border-top">
            <div class="col-md-5">
                <div class="card mt-3">
                    <div class="card-body">
                        <img src="{{ asset('public/' . $product->image) }}">
                        <h3 class="text-center"> {{ $product->name }}</h2>
                        <p class="text-center">{{ __('Price:') }} {{__('$')}}{{ $product->price }}</p>
                        @can('update', $product)
                            <a class="ms-auto" href="{{ route('product.edit', $product) }}">
                                {{ __('edit') }}
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection