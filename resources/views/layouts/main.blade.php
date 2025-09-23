<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid bg-light">
    <nav class="container">
        <ul class="nav py-2">
            <li class="nav-item">
                <a class="nav-link text-dark fw-medium" href="{{ route('main.index') }}">
                    <i class="fas fa-home me-1"></i>Главная
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-medium" href="{{ route('post.index') }}">
                    <i class="fas fa-newspaper me-1"></i>Посты
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-medium" href="{{ route('about.index') }}">
                    <i class="fas fa-info-circle me-1"></i>О нас
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-medium" href="{{ route('contact.index') }}">
                    <i class="fas fa-envelope me-1"></i>Контакты
                </a>
            </li>
        </ul>
    </nav>
</div>
    @yield('content')
</body>
</html>