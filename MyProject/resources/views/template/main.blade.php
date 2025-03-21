<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1E1E1E; /* Dark background */
            color: #EAEAEA; /* Light text */
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #2A2A2A;
            border-bottom: 1px solid #444;
        }
        .navbar-brand {
            font-weight: bold;
            color: #EAEAEA !important;
        }
        .nav-link {
            color: #C0C0C0 !important;
            transition: 0.3s;
        }
        .nav-link:hover {
            color: #ffffff !important;
        }
        .container {
            margin-top: 40px;
        }
        .card {
            background-color: #2A2A2A;
            border: none;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        }
        .card-header {
            background-color: #333;
            color: #EAEAEA;
            font-size: 20px;
            font-weight: bold;
            border-bottom: 1px solid #444;
        }
        .table {
            background-color: #2A2A2A;
            color: #EAEAEA;
            border-radius: 10px;
            overflow: hidden;
        }
        .table th {
            background-color: #444;
            color: #EAEAEA;
        }
        .table tr:hover {
            background-color: #3A3A3A;
            transition: 0.3s;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">MyApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/inventory') }}">Inventory</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</htm