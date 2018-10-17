@extends('layout.layout')

@section('content')
    <h1>Create Product</h1>

    {!! form($form) !!}

    <div class='col-md-12 border-top margin-top padding-top'>
        <h1>Products</h1>

        <table class="table table-bordered table-responsive table-striped table-hover">
            <thead>
                <th width='50px'></th>
                <th>Name</th>
                <th width='70px'>Qtd</th>
                <th>Price</th>
                <th>Submited</th>
                <th>Total</th>
            </thead>
            <tbody>
                @forelse($products as $product)
                @empty
                    <tr>
                        <td colspan='6' class='text-center'>
                            No product found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection