@extends('layouts.master')

@section('title','Tabellone Treni')

@section('main-content')
<ul>
  @foreach ($trains as $train)
  <x-single-train>
    <x-slot:departureTime>{{$train['departure_time']}}</x-slot:departureTime>
    <x-slot:trainCode>{{$train['train_code']}}</x-slot:trainCode>
    <x-slot:destination>{{$train['arrival_station']}}</x-slot:destination>
    <x-slot:status>{{ $train->status_label }}</x-slot:status>
  </x-single-train>
  @endforeach
</ul>
@endsection