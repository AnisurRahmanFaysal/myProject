@extends('layout.custom')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/images/faysal.jpg" alt="This is Anisur Rahman Faysal">
        <div class="title m-b-md">

           Hi, I'm Faysal.

           <form action="form-submit" method="post">
            @csrf

           <input type="text" placeholder="Username">
           <input type="password" placeholder="Password">

           <input type="submit" value="">

           </form>

        </div>
       

    </div>
</div>
@endsection