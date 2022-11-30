@extends('layout.custom')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">

            This is my Homepage

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