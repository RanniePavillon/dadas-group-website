<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            Dadas
        </title>
        
    </head>
    <body>
        <h1>Contact Form Messages</h1>
        <p>Name: {{$name}}</p>
        <p>E-mail: {{$email}}</p>
        <p>Message: {{$msg}}</p>
    </body>
</html>