@extends('layout.main')

@section('content')
    <form action="{{ route('product.create') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <h4 class="display-4">{{ __('New Product') }}</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="mb-2">{{ __('Title') }}</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">{{ __('Category') }}</label>
                            <select name="category_id" class="form-control">
                                <option value="">Please choose</option>
                                @foreach ($category_options as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">{{ __('Price') }}</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <div class="mb-3">
                            <label class="mb-2">{{ __('Picture') }}</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg" type="submit">
                                {{__('Create')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection