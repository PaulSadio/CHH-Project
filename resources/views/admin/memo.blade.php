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
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($announcement as $announcement)
                    <tr>
                        <td>{{ $announcement->id }}</td>
                        <td>{{ $announcement->created_at }}</td>
                        <td>
                            <a href="" download>{{ $announcement->memofile }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
                <div class="uploadfile text-center">
                    <form action="{{ route('memostore') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="upload pb-2 justify-content-center">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                            <h5><strong>To Upload Memo</strong></h5>
                            <p><a href="https://dw.convertfiles.com/files/0001016001700103056/memo.doc" class="link-offset-2" download><u>Download Template</u></a></p>
                            <div class="text-center">
                            <input type="file" name="memofile">
                            </div>
                        </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            
        </div>
    
    </div>
    
@endsection