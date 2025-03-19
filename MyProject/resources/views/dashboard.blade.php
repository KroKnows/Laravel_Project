@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
            <div class="position-sticky">
                <h4 class="text-white p-3">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inventory.index') }}">
                            📦 Inventory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}">
                            🚪 Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Welcome to the Dashboard</h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Inventory Items</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ \App\Models\Inventory::count() }}</h5>
                            <p class="card-text">Total items in inventory</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<style>
    .sidebar {
        height: 100vh;
        padding-top: 20px;
    }
</style>
@endsection

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
    🚪 Logout
</a>
