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
                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <p class="invalid-feedback">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{ __('Category') }}</label>
                        <select name="category_id" class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}">
                            <option value="">Please choose</option>
                            @foreach ($category_options as $category)
                            <option value="{{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}">
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('category'))
                            <p class="invalid-feedback">{{ $errors->first('category') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{ __('Price') }}</label>
                        <span>{{ __('$') }}</span>
                        <input type="number" min="0.01" max="100000.00" step="0.01" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" 
                        name="price" value="{{ old('price') }}">
                        @if ($errors->has('price'))
                            <p class="invalid-feedback">{{ $errors->first('price') }}</p>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="mb-2">{{ __('Picture') }}</label>
                        <input type="file" accept="image/*" class="form-control {{ $errors->has('file') ? 'is-invalid' : '' }}" name="file">
                        @if ($errors->has('file'))
                            <p class="invalid-feedback">{{ $errors->first('file') }}</p>
                        @endif
                    </div>
                    <div class="pt-3">
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