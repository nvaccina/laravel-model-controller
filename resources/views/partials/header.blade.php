<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="border border-bottom-2">
        <div class="container py-3">
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : ''}}" href="{{route('movies')}}">Films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contacts</a>
                </li>
            </ul>

        </div>


    </header>



</body>
</html>
