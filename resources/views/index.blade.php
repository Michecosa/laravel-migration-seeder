@extends('layouts.master')

@section('title','Tabellone Treni')

@section('main-content')
<div class="container">
  <table class="train-table">
    <thead>
      <tr class="single-train header-row fs-4">
        <th class="time">DEPARTURE</th>
        <th class="code">CODE</th>
        <th class="dest">DESTINATION</th>
        <th class="status">STATUS</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($trains as $train)
    <x-single-train>
      <x-slot:departureDate>{{$train->formatted_date}}</x-slot:departureDate>
      <x-slot:departureTime>{{$train['departure_time']}}</x-slot:departureTime>
      <x-slot:trainCode>{{$train['train_code']}}</x-slot:trainCode>
      <x-slot:destination>{{$train['arrival_station']}}</x-slot:destination>
      <x-slot:status>{{ $train->status_label }}</x-slot:status>
    </x-single-train>
    @endforeach
    </tbody>
  </table>
</div>
@endsection