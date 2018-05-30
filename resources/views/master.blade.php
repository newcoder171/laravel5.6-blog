<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
    </head>
    <body>
        <div class="bg-info text-white p-3 m-3">
            <a href="{{route('posts.index')}}" class="btn btn-primary">Home</a>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
            @auth
            <form class="d-inline-block float-right" action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-primary">{{auth()->user()->name}} | Logout</button>
            </form>
            @else
                <a href="{{route('login')}}" class="btn btn-primary float-right">Login</a>
            @endauth
        </div>
        <div class="container">
            @yield('content')
        </div>
        <div class="bg-dark text-white p-4 text-center">
            All rights reserved
        </div>
    </body>
</html>