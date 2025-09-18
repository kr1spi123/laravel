<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ route('main.index') }}">Main</a></li>
                <li><a href="{{ route('post.index') }}">Posts</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('contact.index') }}">Contacts</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
    
</body>
</html>