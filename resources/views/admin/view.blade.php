@extends('layout.layout')
@section('content')
    <div class="container view">
        <div class="container p-3">
            <div class="d-flex justify-content-end">
                <a href="{{ route('evaluation') }}">
                    <button style="background-color: transparent; border:none; font-size: 30px;"><i class="fa-regular fa-circle-xmark"></i></button>
                </a>
                
            </div>
            <div class="container d-flex justify-content-between">
                <div class="container mx-4" >
                    <img src="profile.jpeg" alt="Profile"style="height: 200px; width: 200px;">
                </div>
                <div class="container">
                    <div>
                        <label for="name" style="padding: 0; color:black;">Name:</label>
                        <input type="text" disabled>
                    </div>
                    <div>
                        <label for="contact" style="padding: 0; color:black;">Contact No:</label>
                        <input type="number" disabled>
                    </div>
                    <div>
                        <label for="email" style="padding: 0; color:black;">Email:</label>
                        <input type="email" disabled>
                    </div>
                </div>
                <div class="container">
                    <div class="container text-center">
                        <div class="container d-flex align-middle">
                            <label for="event" style="padding: 0; color:black;">Events Attended: </label>
                            <input type="number" class="totalnumevent mx-2" style="width: 40px" disabled>
                        </div>
                        <div class="mt-2">
                        <input list="eventname" name="event" id="event" placeholder="Event Name...">
                        <datalist id="eventname">
                            <option value="Feeding Program"></option>
                            <option value="Teaching Program"></option>
                            <option value="Auction Program"></option>
                            <option value="Feeding Program"></option>
                            <option value="Feeding Program"></option>
                        </datalist>
                        </div>
                        <div class="container">
                            <label for="subscription" style="padding: 0; color:black;">Annual subscription fee:</label>
                            <input type="text" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center m-3" >
            <label for="remarks"style="padding: 0; color:black; font-size: 30px">Remarks: </label>
            <textarea type="text" style="width: 90%; height: 120px;"></textarea>
        </div>
    </div>
@endsection