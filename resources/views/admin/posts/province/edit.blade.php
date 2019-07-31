@extends('admin.main')
@section('content')
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<h1>Province Infomation</h1>
		</div>
		<form action="{{route('province.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
					<div class="form-group">
						<label for="inputText3" class="col-form-label">Province name</label>
						<input id="inputText3" type="text" class="form-control" name="province_name" value="{{$edit->name}}">
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary" style="margin-top: 28px;">Save</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection