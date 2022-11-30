@extends('layout.custom')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/images/faysal.jpg" alt="This is Anisur Rahman Faysal">
        <div class="title m-b-md">

            Hi, I'm Faysal.

            <form method="post" action="form-submit">
                <div class="form-group">
                    <label>Usename</label>
                    <input type="text" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

        </div>


    </div>
</div>
@endsection