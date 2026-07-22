<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Tracker</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>

    body{
        font-family:'Poppins',sans-serif;
        background:linear-gradient(135deg,#f5efff,#ede4ff,#ffffff);
        min-height:100vh;
    }

    .navbar-custom{

        background:rgba(255,255,255,.65);

        backdrop-filter:blur(18px);

        box-shadow:0 10px 30px rgba(139,92,246,.15);

        border-bottom:1px solid rgba(255,255,255,.4);

    }

    .brand{

        font-size:28px;

        font-weight:700;

        color:#7c3aed;

    }

    .hero{

        background:linear-gradient(135deg,#8b5cf6,#a855f7,#c084fc);

        color:white;

        border-radius:30px;

        padding:45px;

        margin-top:35px;

        box-shadow:0 20px 45px rgba(139,92,246,.35);

    }

    .hero h1{

        font-weight:700;

    }

    .hero p{

        opacity:.9;

    }

    .card-stat{

        border:none;

        border-radius:25px;

        background:rgba(255,255,255,.75);

        backdrop-filter:blur(20px);

        box-shadow:0 15px 35px rgba(0,0,0,.08);

        transition:.3s;

    }

    .card-stat:hover{

        transform:translateY(-6px);

    }

    .card-number{

        font-size:32px;

        font-weight:700;

        color:#7c3aed;

    }

    .table-card{

        background:white;

        border-radius:25px;

        box-shadow:0 15px 40px rgba(0,0,0,.08);

        overflow:hidden;

    }

    .table thead{

        background:#8b5cf6;

        color:white;

    }

    .btn-purple{

        background:#8b5cf6;

        color:white;

        border:none;

        border-radius:12px;

        padding:10px 20px;

    }

    .btn-purple:hover{

        background:#6d28d9;

        color:white;

    }

    .badge-high{

        background:#ef4444;

    }

    .badge-medium{

        background:#f59e0b;

    }

    .badge-low{

        background:#22c55e;

    }

    .badge-pending{

        background:#64748b;

    }

    .badge-progress{

        background:#3b82f6;

    }

    .badge-done{

        background:#10b981;

    }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom">

<div class="container">

<span class="brand">

<i class="bi bi-journal-check"></i>

Study Tracker

</span>

</div>

</nav>

<div class="container mb-5">

@yield('content')

</div>

</body>

</html>
