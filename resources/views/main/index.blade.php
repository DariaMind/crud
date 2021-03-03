@extends('layouts.main')




@section('content')

<h1>{{$title}}</h1>


@foreach($users as $user)
    {{-- <p>{{$user}}</p> --}}
  <div class="col-6 col-sm-3">@include('layouts.profile')</div>
    
@endforeach
{{-- {{$users->links()}} --}}
@endsection

@section('title',$title)
  @section('page')


