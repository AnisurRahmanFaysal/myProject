@extends('layout.custom')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/images/faysal.jpg" alt="This is Anisur Rahman Faysal">
        <div class="title m-b-md">

            Hi,I'm {{$userName}}. My userId is {{$userid}}. I'm {{$age}} year old.

        </div>
        @foreach($products as $product)

        @if($product == 'table')
        <h1>{{$product}}</h1>
        @else
        <h1>This is not table.</h1>
        @endif
        @endforeach

    </div>
</div>
@endsection