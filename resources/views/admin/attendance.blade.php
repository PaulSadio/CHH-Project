@extends('layout.layout')
@section('content')
    @include('sidebar.adminsidebar')
    <div class="container attendance">
        <div class="container eventname mt-3">
            <input list="magicHouses" id="eventTitle" name="myHouse" placeholder="Event Name..." />
            <datalist id="magicHouses">
                <option value="Gryfindor">
                <option value="Hufflepuff">
                <option value="Slytherin">
                <option value="Ravenclaw">
                <option value="Horned Serpent">
                <option value="Thunderbird">
                <option value="Pukwudgie">
                <option value="Wampus">
            </datalist>
        </div>
    
        <div class="container table mt-5">
            <div class="searchbar">
                <form class="d-flex justify-content-end" role="search">
                    <div class="search">
                    <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <div class="containertable" style="max-height: 225px">
            <table class="table table-bordered border-dark table-striped">
                <tr>
                    <th>Name</th>
                    <th class="text-center" style="width: 30%">Action</th>
                </tr>
                <tr>
                    <td>Paul Sadio</td>
                    <td class="text-center">
                        <button style="background-color: #32D942; width: 100px;" onclick="attendacebtn()" id="attendancebtn">Present</button>
                    </td>
                </tr>
                <tr>
                    <td>Eugene Viajedor</td>
                    <td class="text-center">
                        <button style="background-color: #32D942; width: 100px;" onclick="attendacebtn2()" id="attendancebtn2">Present</button>
                    </td>
                </tr>
                <tr>
                    <td>Rosebel Pasquil</td>
                    <td class="text-center">
                        <button style="background-color: #32D942; width: 100px;" onclick="attendacebtn3()" id="attendancebtn3">Present</button>
                    </td>
                </tr>
                <tr>
                    <td>Rosebel Pasquil</td>
                    <td class="text-center">
                        <input type="button" class="btn btn-secondary attendancebtn" value="Pending">
                    </td>
                </tr>
                <tr>
                    <td>Rosebel Pasquil</td>
                    <td class="text-center">
                        <input type="button" class="btn btn-secondary attendancebtn" value="Pending">
                    </td>
                </tr>
                <tr>
                    <td>Rosebel Pasquil</td>
                    <td class="text-center">
                        <input type="button" class="btn btn-secondary attendancebtn" value="Pending">
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </div>
@endsection