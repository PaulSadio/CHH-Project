@extends('layout.layout')
@section('content')
    @include('sidebar.adminsidebar')
    <div class="container memo">
        <div class="container memolayout">
            <div class="searchbar">
                <form class="d-flex justify-content-end" role="search">
                    <div class="search">
                    <input type="search" class="form-control-me-2" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
            </div>
            <div class="containertable" style="max-height: 150px">
                <table class="table datatable table-bordered border-dark table-striped text-center">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>File</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Nov.1,2023</td>
                        <td>
                            <a href="">File.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nov.2,2023</td>
                        <td>
                            <a href="">memo.pdf</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nov.3,2023</td>
                        <td>memo.pdf</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Eugene Viajedor</td>
                        <td>memo.pdf</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Eugene Viajedor</td>
                        <td>memo.pdf</td>
                    </tr>
                    
                </table>
            </div>
                <div class="uploadfile text-center">
                    <div class="upload pb-2 justify-content-center">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <h5><strong>To Upload Memo</strong></h5>
                        <p><a href="https://dw.convertfiles.com/files/0001016001700103056/memo.doc" class="link-offset-2" download><u>Download Template</u></a></p>
                        <div class="text-center">
                         <input type="file">
                        </div>
                    </div>
                    <input type="button" value="Submit">
                </div>
        </div>
    </div>
@endsection