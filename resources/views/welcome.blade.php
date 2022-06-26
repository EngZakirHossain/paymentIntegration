<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 7 PayPal Payment Gateway Integration Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-5 text-center ">
    <h2>Payment Get way Integration</h2>

    <button class="btn btn-success large">
            <a href="{{route('paypal')}}">Paypal</a>
    </button>
    <button class="btn btn-success large">
        <a href="{{route('SSLCommerce')}}">SslCommerce</a>
    </button>
</div>
</body>
</html>
