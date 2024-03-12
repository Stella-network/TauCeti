<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue</title>
        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'resources/js/sample/sample.js'
        ])
    </head>
    <body>
        <div id="sample-is-here"></div>
    </body>
</html>
