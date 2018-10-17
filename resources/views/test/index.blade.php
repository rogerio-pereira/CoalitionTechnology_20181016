@extends('layout.layout')

@section('content')
    <h1>Create Product</h1>

    {!! form($form) !!}

    <div id='productList'>
        @include('test._table')
    </div>
@endsection

@section('scripts')
    {!! Html::script('/js/save.min.js') !!}
@endsection