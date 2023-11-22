@extends('layout.layout')
@section('content')
    @include('sidebar.adminsidebar')
    <div class="container treasury">
        <div class="container treasurylayout text-center">
            <div class="treasurytotal my-2 mx-4">
                <h1 class="display-4 d-flex justify-content-start" style="color: black">Treasury:</h1>
                    <div class="container fundfee">
                        <div class="d-flex justify-content-between mt-3">
                            <label class="" style="color: black; padding-left: 100px; font-size: 30px;">Annual Fee: </label>
                            <input type="number" class="fee text-center">
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <label class="" style="color: black; padding-left: 90px; font-size: 30px;">Fund Raiser: </label>
                            <input type="number"  class="fund text-center">
                        </div>
                    </div>
                <input type="number" class="total text-center mt-4">
            </div>
            <div class="treasurybtn d-flex justify-content-between mb-2 mx-4">
                <a href="{{ route('annualfee') }}" style="width: 300px; background-color: #4e7edb;">Annual Fee</a>
                <a href="{{ route('fundraiser') }}" style="width: 300px; background-color: #4e7edb;">Fund Raiser</a>
            </div>
        </div>
    </div>
@endsection