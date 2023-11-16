@extends('layout.layout')
@section('content')
    @include('sidebar.adminsidebar')
    <div class="container annualfee">
        <div class="container annualfeelayout">
                <div class="searchbar d-flex justify-content-between mt-3">
                    <a href="{{ route('treasury') }}" class="return text-center"><i class="fa-regular fa-circle-left"></i> Return</a>
                    <form class="d-flex justify-content-end" role="search">
                        <div class="search">
                        <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </form>
                </div>
                <div class="containertable" style="max-height: 350px">
                        <table class="table datatable table-bordered border-dark table-striped mt-3 text-center">
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
                                        <input type="button" value="Pending" class="btn btn-secondary">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Eugne Viajedor</td>
                                <td>
                                    <div>
                                        <input type="button" value="Paid" class="btn btn-success">
                                    </div>
                                </td>
                            </tr>
                            
                        </table>
                </div>
        </div>
    
    </div>
@endsection