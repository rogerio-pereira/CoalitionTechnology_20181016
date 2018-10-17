@php
    if(count($products) > 0) {
        $total = 0;
        $lastProduct = $products[count($products)-1];
    }
@endphp

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
                @php
                    $totalProduct = $product->qtd * $product->value;
                    $total += $totalProduct;
                @endphp
                <tr>
                    <td></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qtd}}</td>
                    <td>{{money_format('%i', $product->value)}}</td>
                    <td>{{$product->dateTime->date}}</td>
                    <td>{{money_format('%i', $totalProduct)}}</td>
                </tr>

                @if($product === $lastProduct)
                    <tr>
                        <td colspan='5' class='text-right'>
                            Total
                        </td>
                        <td>
                            {{money_format('%i', $total)}}
                        </td>
                    </tr>
                @endif
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