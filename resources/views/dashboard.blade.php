@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col">
            <h1 class="h2 mb-3">Welcome to Stock Management System</h1>
            <p class="text-muted mb-4">Manage your inventory, customers, and orders efficiently</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class='bx bx-package text-primary fs-4'></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title mb-0">Products</h5>
                            <p class="text-muted small mb-0">Manage your inventory</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="/products" class="btn btn-outline-primary">View Products</a>
                        <a href="/products-by-category" class="btn btn-outline-secondary">By Category</a>
                        <a href="/products-by-supplier" class="btn btn-outline-secondary">By Supplier</a>
                        <a href="/products-by-store" class="btn btn-outline-secondary">By Store</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class='bx bx-user text-success fs-4'></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title mb-0">Customers</h5>
                            <p class="text-muted small mb-0">Manage customer information</p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <a href="/customers" class="btn btn-outline-success">View Customers</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class='bx bx-store text-info fs-4'></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title mb-0">Suppliers</h5>
                            <p class="text-muted small mb-0">Manage supplier information</p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <a href="/suppliers" class="btn btn-outline-info">View Suppliers</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class='bx bx-cart text-warning fs-4'></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title mb-0">Orders</h5>
                            <p class="text-muted small mb-0">Manage customer orders</p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <a href="{{ route('orders.index') }}" class="btn btn-outline-warning">View Orders</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="flex-shrink-0">
                            <div class="bg-dark bg-opacity-10 p-3 rounded">
                                <i class='bx bx-chart text-dark fs-4'></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="card-title mb-0">Stats</h5>
                            <p class="text-muted small mb-0">View stats</p>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="{{ route('ordered.products') }}"  class="btn btn-outline-dark">View Ordered Products </a>
                            <a href="{{ route('same.products.customers') }} " class="btn btn-outline-dark" >Customers Who Ordered the Same
                                Products as Annabel Stehr</a>
                            <a href="{{ route('products.orders_count') }}" class="btn btn-outline-dark">Show Number of Orders per Product</a>
                            <a href="{{ route('products.more_than_6_orders') }}" class="btn btn-outline-dark">Products with More Than 6
                                Orders</a>
                            <a href="{{ route('orders.totals') }}" class="btn btn-outline-dark">Show Total Amount per Order</a>
                            <a href="{{ route('orders.greater_than_60') }}" class="btn btn-outline-dark">Orders with Total Greater Than
                                Order 60</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
</div>
@endsection
