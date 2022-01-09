<div class="col-sm-4 col-md-3 mx-auto my-4">
    <div class="card h-100">
        <div class="d-flex flex-column card-body">
            <div class="mh-60 mb-3">
                <img src="{{ $product->picture }}" class="w-100">
            </div>
            <div class="mh-40 mt-auto">
                <h5 class="mb-3 text-center"> {{ $product->name }}</h2>
                <p class="text-center">{{ __('Price') }}: {{__('$')}}{{ $product->price }}</p>
            </div>
        </div>
        <div class="d-grid gap-2 col-sm-12 p-2">
            <button class="btn btn-outline-primary btn-lg" type="button">
                {{__('Add to cart')}}
            </button>
            <button class="btn btn-outline-primary btn-lg" type="button">
                {{__('Buy it now')}}
            </button>
        </div>
    </div>
</div>