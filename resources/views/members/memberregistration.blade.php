@extends('layout.memberlayout')
@section('content')
<div class="containerbody d-flex">
    <div class="sidebar regside">
        <a href="{{ route('registration') }}"><i class="fa-solid fa-file-pen"></i> Registration</a>
    </div>

    <div class="container register">
        <div class="container registrationlayout text-center">
            <div class="container registerinfo">
                <form>
                    <div class="mt-3">
                        <label for="eventid" style="color: black;">Event ID:</label>
                        <input type="password" class="form-control" id="eventid" name="eventid">
                    </div>
                    <div class="mt-3">
                        <label for="name" style="color: black;">Name:</label>
                        <input type="password" class="form-control" id="name" name="name">
                    </div>
                    <div class="mt-3">
                        <label for="idnumber" style="color: black;">ID No.:</label>
                        <input type="number" class="form-control" id="idnumber" name="idnumber">
                    </div>
                    <div class="mt-3">
                        <label for="email" style="color: black;">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </form>
            </div>
            <button class="reg mt-3">Register</button>
        </div>
    </div>

  </div>
      
@endsection