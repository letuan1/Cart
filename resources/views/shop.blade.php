@extends('layout.base')

@section('conten')
    Cart
@endsection

@section('th')
    <th><span></span></th>
    <th><span></span></th>
@endsection

@section('tbody')
    <?php

    $carts = session()->get('cart');

    ?>
    @foreach ($carts as $key => $cart)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $cart['name'] }}</td>
            <td>{{ $cart['auther'] }}</td>
            <td>{{ $cart['price'] }}</td>
            <td>{{ count($cart) }}</td>
            <td><a href="{{ route('delete') }}"> <i class="material-icons">delete</i></a></td>
        </tr>
    @endforeach
@endsection


@section('conten1')
    <a href="{{ route('index') }}"><i class="far fa-hand-point-left icon"></i></a>
@endsection