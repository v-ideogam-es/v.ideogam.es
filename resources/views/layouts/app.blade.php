<!DOCTYPE html>
<html lang="en" prefix="dcterms: http://purl.org/dc/terms/ og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="@yield('author')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="dcterms:modified" content="@yield('timestamp')">
        <title>@yield('title', 'v.ideogam.es')</title>
        <link rel="canonical" href="@yield('canonical_url')">
        <link rel="stylesheet" href="//oss.maxcdn.com/semantic-ui/2.1.8/semantic.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @yield('content')
    </body>
</html>
