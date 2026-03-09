<!DOCTYPE html>
<html>

<head>

    <title>Sistema de Protocolo</title>

    <!-- Montserrat Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="<?= base_url('assets/favicon_logo.png') ?>" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary-blue: #0056b3;
            --deep-blue: #003366;
            --light-blue: #e7f1ff;
            --gradient-blue: linear-gradient(135deg, #0056b3 0%, #003366 100%);
            --accent-blue: #00a8ff;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f7fa;
            color: #33475b;
        }

        .sidebar-blue {
            background: var(--gradient-blue) !important;
            box-shadow: 4px 0 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            padding-bottom: 20px;
        }

        .nav-link {
            transition: all 0.3s ease;
            font-weight: 500;
            margin-bottom: 5px;
            border-radius: 12px;
            margin-left: 10px;
            margin-right: 10px;
            padding: 10px 15px !important;
            display: flex !important;
            align-items: center;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }

        .nav-link[aria-expanded="true"] .rotate-icon {
            transform: rotate(90deg);
        }

        .rotate-icon {
            transition: transform 0.3s ease;
        }

        /* Beautiful Cards */
        .card {
            border-radius: 16px;
            border: none;
            box-shadow: 0 8px 24px rgba(149, 157, 165, 0.15);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-dashboard {
            color: white;
            padding: 20px;
        }

        .card-protocolo {
            background: linear-gradient(135deg, #0d6efd 0%, #003366 100%);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.2);
        }

        .card-triagem {
            background: linear-gradient(135deg, #fd7e14 0%, #bc5100 100%);
            box-shadow: 0 10px 20px rgba(253, 126, 20, 0.2);
        }

        .card-separacao {
            background: linear-gradient(135deg, #6f42c1 0%, #3e1b80 100%);
            box-shadow: 0 10px 20px rgba(111, 66, 193, 0.2);
        }

        .card-expedicao {
            background: linear-gradient(135deg, #198754 0%, #0a4d2e 100%);
            box-shadow: 0 10px 20px rgba(25, 135, 84, 0.2);
        }

        /* Beautiful Buttons */
        .btn {
            border-radius: 10px;
            padding: 8px 20px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            background-color: var(--primary-blue);
            border: none;
        }

        .btn-success {
            background-color: #198754;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        /* Tables */
        .table-container {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        }

        .table thead th {
            background-color: var(--deep-blue) !important;
            color: white !important;
            border: none;
            padding: 15px;
            font-size: 0.9rem;
        }

        .table thead th:first-child {
            border-top-left-radius: 12px;
        }

        .table thead th:last-child {
            border-top-right-radius: 12px;
        }

        .table td {
            padding: 12px 15px;
            vertical-align: middle;
            font-size: 0.9rem;
        }

        /* Utilities */
        .text-large {
            font-size: 2.2rem;
            font-weight: 800;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
        }

        .text-center-col {
            text-align: center;
        }

        h2,
        h3,
        h4 {
            color: var(--deep-blue);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: -0.5px;
            margin-bottom: 25px;
        }

        .btn {
            margin-right: 5px;
            margin-bottom: 5px;
        }

        .user-info-bar {
            background: white;
            border-radius: 12px;
            padding: 10px 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: flex-end;
            margin-bottom: 25px;
        }

        .user-badge {
            background: #f0f7ff;
            color: var(--primary-blue);
            padding: 4px 12px;
            border-radius: 8px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-left: 10px;
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row">