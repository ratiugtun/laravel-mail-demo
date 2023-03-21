<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js', 'resources/js/app.css', 'resources/css/app.css'])
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto align-items-center justify-content-center">
        <div class="">
            <h1>{{ $message }}</h1>
            <p></p>
            <p>
                You are being redirected to <a href="{{ $url }}">{{ $url_name }}</a> in</p>
            <p class="lead">
                 <span id="countdown">3</span> seconds...
            </p>
            <p>
                Or you can click the button below.
            </p>
            <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">{{ $url_name }}</a>
        </div>
    </div>
    <script>
        setTimeout(function() {
               window.location.href = '{{ $url }}'
           }, 3000);

        // show count down
        var countdown = document.getElementById('countdown');
        var count = 3;

        setInterval(function() {
            count--;
            countdown.innerHTML = count;
        }, 1000);

    </script>
</body>