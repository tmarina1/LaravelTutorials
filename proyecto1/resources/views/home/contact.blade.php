@extends('layouts.app')
@section('title', $title)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-4 ms-auto">
      <p class="lead">{{ $description }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">{{ $addrres }}</p>
    </div>
    <div class="col-lg-4 me-auto">
      <p class="lead">{{ $email }}</p>
    </div>
  </div>
</div>
@endsection