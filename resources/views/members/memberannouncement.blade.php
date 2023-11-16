@extends('layout.memberlayout')
@section('content')
<div class="containerbody d-flex">
    <div class="sidebar annside">
        <a href="{{ route('announcement') }}"><i class="fa-solid fa-envelope"></i> Memo</a>
    </div>

    <div class="container membermemo">
        <div class="container membermemolayout">
            <div class="container d-flex justify-content-between">
                <h5 class="mt-2">To open memo download file:</h5>
                <form class="d-flex justify-content-end" role="search">
                    <div class="search">
                        <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <div class="containertable memotable mt-3" style="max-height: 325px">
                <table class="table datatable table-bordered border-dark table-striped text-center  ">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>File</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Oct.24,2023</td>
                        <td>Memo</td>
                        <td>
                            <a href="">file</a>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection