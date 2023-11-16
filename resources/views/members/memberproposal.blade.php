@extends('layout.memberlayout')
@section('content')
<div class="card proposallayout" style="width: 95%;">
    <h1 class="display-4" style="color: black">Proposal</h1>
    <div class="container proposalsubmit d-flex">
        <div class="container text-center text-white" style="width: 50%;">
            <h4>To download template</h4>
            <h4><a href="https://dw.convertfiles.com/files/0674721001700100327/proposal_template.doc" class="link-offset-2 text-white" download><u>click here</u></a>:</h4>

            <div class="container submitfile ">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <h6 class="mt-2">Upload File here:</h6>
                <input type="file" name="proposalfile" id="proposalfile" class="my-2">
            </div>
            <button type="submit" class="submit mt-3">Submit</button>
        </div>

        <div class="container proposalinfo" style="width: 50%;">
            <form>
                <div class="mb-2">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-2">
                  <label for="eventname" class="form-label">Event Name:</label>
                  <input type="text" class="form-control" id="eventname" name="eventname">
                </div>
                <div class="mb-2">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" class="form-control" id="date" name="date">
                  </div>
                  <div class="mb-2">
                    <label for="location" class="form-label">Location:</label>
                    <input type="text" class="form-control" id="location" name="location">
                  </div>
            </form>
        </div>
    </div>
</div>
  
@endsection