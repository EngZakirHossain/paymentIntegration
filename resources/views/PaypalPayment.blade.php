<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 7 PayPal Payment Gateway Integration Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-5 text-center">
    <h2>PayPal payment Get way Integration</h2>
    <form action="{{route('charge')}}" method="post">
        <input type="text" name="amount" />
        @csrf
        <input type="submit" name="submit" value="Pay Now">
    </form><br>

{{--    <h2>SSL Commerce payment Get way Integration</h2>--}}

{{--    <button class="your-button-class" id="sslczPayBtn"--}}
{{--            token="if you have any token validation"--}}
{{--            postdata="your javascript arrays or objects which requires in backend"--}}
{{--            order="If you already have the transaction generated for current order"--}}
{{--            endpoint="/pay-via-ajax"> Pay Now--}}
{{--    </button>--}}
</div>
{{--<script>--}}
{{--    (function (window, document) {--}}
{{--        var loader = function () {--}}
{{--            var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];--}}
{{--            script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);--}}
{{--            tag.parentNode.insertBefore(script, tag);--}}
{{--        };--}}

{{--        window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);--}}
{{--    })(window, document);--}}
{{--</script>--}}
</body>
</html>
