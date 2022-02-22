@extends('layouts.app')


@section('content')
<br><br><br>
      <div class="container">
          <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                      <div class="card-header">
                          File Upload
                      </div>
                      <div class="card-body">
                          <form method="Post" action="{{route('upload.uploadfile')}}" enctype="multipart/form-data">
                              @csrf
                              <div class="form-group">
                                  <label for="file">Choose File</label>
                                  <input type="file" class="form-control" name="file" id="file"/>
                              </div>
                              <button type="submit" class="bg-blue-500 text-white px-4 py-3 m-2  rounded font-medium ">Upload</button>
                          </form>

                          </div>
                  </div>
             </div>
          </div>
      </div>

 @endsection
