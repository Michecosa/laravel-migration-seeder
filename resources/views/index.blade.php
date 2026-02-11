@extends('layouts.master')

@section('title','Tabellone Treni')

@section('main-content')
<ul>
  @foreach ($trains as $train)
      <li>{{$train}}</li>
  @endforeach
</ul>
@endsection