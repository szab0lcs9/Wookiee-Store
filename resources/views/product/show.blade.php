@extends('layout.main')

@section('content')
    <h1 class="display-5 mb-4">My products in the store</h1>
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $product->picture }}">
                        <h3 class="text-center"> {{ $product->name }}</h2>
                        <p class="text-center">Price: {{__('$')}}{{ $product->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection