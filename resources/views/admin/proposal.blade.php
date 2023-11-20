@extends('layout.layout')
@section('content')
<div class="card proposallayout" style="width: 95%;">
    <h1 class="display-4" style="color: black">Proposal</h1>
    <div class="container proposaltable">
        <div class="container">
            <div class="searchbar d-flex justify-content-end">
                <form class="d-flex justify-content-end" role="search">
                    <div class="search">
                    <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <div class="containertable" style="max-height: 300px">
            <table class="table datatable table-bordered border-dark table-striped mt-3 text-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Event Title</th>
                    <th>Proponent</th>
                    <th>Files</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($adminproposal as $adminproposal)
                <tr>
                    <td>{{ $adminproposal->id }}</td>
                    <td>{{ $adminproposal->proptitle }}</td>
                    <td>{{ $adminproposal->propname }}</td>
                    <td>
                        <a href="" download>{{ $adminproposal->propfile }}</a>
                    </td>
                    <td style="width: 25%">
                        <div class="container d-flex">
                            <button type="button" class="btn btn-success mx-3">Approve</button>
                            <button type="button" class="btn btn-danger mx-3">Decline</button>
                        </div>
                    </td>
                </tr>              
                @endforeach
            </tbody>

            </table>
        </div>
        </div>
    </div>
</div>
@endsection