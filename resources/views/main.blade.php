<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
       <h2>Simple LARAVEL Project</h2>
       <p>Welcome to the simple LARAVEL project.</p>
       <form action="/subpage/HelloWorld!">
           <input type="submit" value="HelloWorld!" />
       </form>
       <form action="/subpage/">
           <input type="submit" value="Anonymous...?" />
       </form>
    </body>
</html>
