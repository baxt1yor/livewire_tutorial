<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "Laravel" }}</title>
    <livewire:styles/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
{{--    <livewire:contact/>--}}
{{--    <livewire:hello-world name="Baxtiyor"/>--}}
@yield('content')
<livewire:scripts/>
</body>
</html>
