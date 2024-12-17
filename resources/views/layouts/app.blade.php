<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyakit pada Gigi dan Mulut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRAB3I5Z8Fz8J2LB9Nch23u6tX9aFO9XGzV5fpc43i1ENJX54l1T1LOmM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f7f6;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 30px;
        }
        .hasil-diagnosa {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .judul-hasil {
            font-size: 24px;
            font-weight: bold;
        }
        .penyakit-list {
            list-style-type: none;
            padding-left: 0;
        }
        .penyakit-item {
            background-color: #e2f7e1;
            padding: 10px;
            margin-bottom: 8px;
            border-radius: 5px;
            font-size: 18px;
        }
        .alert {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-wGfE1tc3d6HROf/dQ+qVRFAKwxXJYFTIfgRfgzQsC44+jExYwURQ64W4n52cp99P" crossorigin="anonymous"></script>
</body>
</html>
