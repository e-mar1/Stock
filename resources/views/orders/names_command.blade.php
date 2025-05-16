@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Order per Names</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->product_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection