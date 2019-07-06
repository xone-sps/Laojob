@extends('admin.main')
@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header" id="top">
                            <h2 class="pageheader-title">Post job </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Post Update job Form</h5>
                            <div class="card-body">
                                <form action="{{ route('job.update',$editjob->id) }}" method="POST" enctype="multipart/form-data">
                                	@csrf
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Title</label>
                                        <input id="inputText3" type="text" class="form-control" name="title" value="{{$editjob->title}}">
                                    </div>
                                               <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Company name</label>
                                        <input id="inputText3" type="text" class="form-control" name="company_name" value="{{$editjob->company_name}}">
                                    </div>
                                        <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Location</label>
                                        <input id="inputText3" type="text" class="form-control" name="location" value="{{$editjob->location}}">
                                    </div>
                                    <div class="custom-file mb-3">
                                     <label class="custom-file-label" for="customFile">Logo</label>
                                        <input type="file" class="custom-file-input" id="customFile" name="logo" value="{{$editjob->logo}}">
                                    </div>
                                      <div class="custom-file mb-3 edit-img">
                                        @if("/images/{{$editjob->logo}}")
                                        <img class="rounded" width="45" src="/images/{{$editjob->logo}}">
                                        @else
                                        <p>No image found</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Job description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="description">{{$editjob->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                    	<button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection