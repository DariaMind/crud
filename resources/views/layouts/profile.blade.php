<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body>
  

@yield('page')
<a href="/user/{{$user->slag}}">
<div class="user-page col-md-3 mb-3">
<div class="card" style="width: 18rem; ">
    <img src="{{$user->img}}" class="card-img-top" alt="{{$user->name}}">
 </a>
    <div class="card-body" >
      <h5 class="card-title">{{$user->name}}</div></h5>
      <p class="card-text">{{$user->phone}}</p>
      <p class="card-text">{{$user->email}}</p>
    </div>
     </div>
   </div> 

   
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
@yield('js')
</body>
</html>