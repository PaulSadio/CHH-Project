@extends('layout.layout')
@section('content')
    @include('sidebar.adminsidebar')
    <div class="container evaluation">
        <div class="container evaluationlayout">
            <div class="membersearchbar d-flex justify-content-end">
                <form class="d-flex justify-content-end" role="search">
                    <div class="search">
                        <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <div class="containertable" style="max-height: 350px">
            <table class="table datatable table-bordered border-dark table-striped text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rosebel Pasquil</td>
                    <td>
                        <div>
                            <a href="{{ route('view') }}"><i class="fa-solid fa-circle-info"></i> View</a>
                            
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </div>
@endsection