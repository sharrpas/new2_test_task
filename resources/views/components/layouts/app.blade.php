<!DOCTYPE html>
<html dir="rtl">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://db.onlinewebfonts.com/c/b4970ca649486b095a2e59e0cb7c7663?family=YekanBakh-Medium"
          rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: "YekanBakh-Medium";
        }
    </style>
</head>
<body>
{{ $slot }}
</body>
</html>
