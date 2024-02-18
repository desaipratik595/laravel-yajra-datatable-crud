<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yajra Datatable Example By Pratik Desai</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>

    <header>
        <!-- Your header content goes here -->
    </header>

    <nav>
        <!-- Your navigation menu goes here -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

    <!-- Include JavaScript files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    @stack('scripts')
<!-- copyright by Pratik Desai -->
</body>
</html>
