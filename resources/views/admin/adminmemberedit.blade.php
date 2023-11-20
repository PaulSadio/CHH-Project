@extends('layout.layout')
@section('content')
<div class="container">
    <form action="{{ route('update', ['member'=>$member]) }}" method="post">
        @csrf
        @method('put')
            <div class="containerLR d-flex p-4">
                <div class="containerprofile text-center p-3">
                    <div class="card profilecard" style="width: 200px; height: 200px;">
                        <img src="profile.jpeg" alt="Profile" class="profile" value="{{ $member->profilepic }}">
                    </div>
                    <div class="container text-center">
                        <input type="file" value="Upload file" class="text-center mt-1" style="width: 250px; border-radius: 0;">
                    </div>
                    <div class="container d-flex flex-row justify-content-center mt-2">
                        <div class="mx-3">
                            <label for="age" style="color: black; padding: 0;">Age:</label>
                            <input type="number" class="text-center" name="'memberage" placeholder="age" value="{{ $member->memberage }}" style="width: 100px">
                        </div>
                        <div>
                            <label for="sex" style="color: black; padding: 0;">Sex:</label>
                            <input type="text" class="text-center" name="membersex" placeholder="M/F" value="{{ $member->membersex }}" style="width: 100px">
                        </div>
                    </div>
                    <div class="bday">
                        <label for="birthday" style="padding: 0; color:black; justify-content: baseline;">Birthday:</label>
                        <input type="date" name="birthday" id="birthday" value="{{ $member->birthday }}" style="width: 250px">
                    </div>
                </div>
                <div class="containerprofile detailprofile p-4" style="width: 50%; height: 100%;">
                    <div class="mb-3">
                        <label for="name" style="padding: 0; color:black;">Name:</label>
                        <input type="text" name="name" value="{{ $member->membername }}" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="address" style="padding: 0; color:black;">Address:</label>
                        <input type="text" name="address" value="{{ $member->memberaddress }}" id="address">
                    </div>
                    <div class="mb-3">
                        <label for="email" style="padding: 0; color:black;">Email:</label>
                        <input type="email" name="email" value="{{ $member->memberemail }}" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="contact" style="padding: 0; color:black;">Contact No:</label>
                        <div class="input-group contactnum">
                            <span class="input-group-text">+63-9</span>
                            <input type="number" name="contact" value="{{ $member->contactnumber }}" id="contact">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between text-center mx-3 mt-4">
                        <a href="{{ route('adminmembers') }}">
                            <input type="button" value="Cancel" 
                        style="background-color: #D9D9D9; border:none; width: 100px; border-radius: 25px;">
                        </a>
                        
                        <input type="submit" value="Save" 
                        style="background-color: #4e7edb; border: none; width: 100px; border-radius: 25px;">
                    </div>
                </div>
            </div>
        
    </div>
</form>
@endsection