@extends('layout.main')

@section('content')
    <h1 class="display-5 ms-3 mb-3">{{ __('Product properties') }}</h1>
        <div class="row border-top">
            <div class="col-md-5 m-auto">
                <div class="card mt-3">
                    <div class="card-body">
                        <img src="{{ $product->image }}">
                    </div>
                </div>
            </div>
            <div class="col-md-5 m-auto">
                <div class="card mt-3">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ __('Description:') }}
                                    </th>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ __('Price:') }}
                                    </th>
                                    <td>
                                        {{__('$')}}{{ $product->price }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ __('Seller:') }}
                                    </th>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 col-sm-12 p-2">
                            <button class="btn btn-outline-primary btn-lg" type="button">
                                {{__('Add to cart')}}
                            </button>
                            <button class="btn btn-outline-primary btn-lg" type="button">
                                {{__('Buy it now')}}
                            </button>
                        </div>
                        <div class="d-flex justify-content-end">
                            @can('update', $product)
                                <a class="mx-2 btn btn-outline-primary" href="{{ route('product.edit', $product) }}">
                                    {{ __('Edit') }}
                                </a>
                            @endcan
                            @can('delete', $product)
                                <a class="mx-2 btn btn-outline-primary" href="{{ route('product.delete', $product) }}">
                                    {{ __('Delete') }}
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection