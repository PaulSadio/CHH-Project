@extends('layout.layout')
@section('content')
    @include('sidebar.adminsidebar')
    <div class="container fundraiser">
        <div class="container fundraiserlayout">
                <div class="searchbar d-flex justify-content-between mt-3">
                    <a href="{{ route('treasury') }}" class="return text-center"><i class="fa-regular fa-circle-left"></i> Return</a>
                    <form class="d-flex justify-content-end" role="search">
                        <div class="search">
                        <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </form>
                </div>
                <div class="container fundraiserdetails">
                    <form>
                        <div class="d-flex">
                            <label for="fundtitle" style="color: black;">Fund Raising Title: </label>
                            <input type="text" name="fundtitle" placeholder="Enter Value" style="width: 500px;" required>
                        </div>
                        <div class="d-flex mt-3">
                            <label for="totalfundamount" style="color: black">Total Amount: </label>
                            <input type="number" name="totalfundamount" value="Enter Value" required>
                        </div>
                        <div class="d-flex mt-3">
                            <label for="eventdate" style="color: black">Date: </label>
                            <input type="date" name="eventdate" required>
                            <div class="d-flex justify-content-end" style="margin-left: 500px;">
                                <button type="button" class="btn btn-success" style="width: 100px;">Add</button>
                            </div>
                        </div>
                    </form>
                    <div class="containertable" style="max-height: 200px">
                        <table class="table datatable table-bordered border-dark table-striped mt-3 text-center" >
                            <tr>
                                <th>Date</th>
                                <th>Fund Raiser Title</th>
                                <th>Amount</th>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Movie Festival</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Auction</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Auction</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Auction</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Auction</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Auction</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>9/6/23</td>
                                <td>Auction</td>
                                <td>5000</td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>
    
    </div>
@endsection