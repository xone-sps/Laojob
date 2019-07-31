@extends('admin.main')
@section('content')
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<h1>Province Infomation</h1>
		</div>
		<form action="{{route('province.save')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12">
					<div class="form-group">
						<label for="inputText3" class="col-form-label">Province name</label>
						<input id="inputText3" type="text" class="form-control" name="province_name">
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary" style="margin-top: 28px;">Save</button>
					</div>
				</div>
			</div>
		</form>
<div class="card-body p-0">
<div class="table-responsive">
	<table class="table">
		<thead class="bg-light">
			<tr class="border-0">
			<th class="border-0">ID</th>
						<th class="border-0">Province Name</th>
							<th class="border-0">Action</th>
		</thead>
       @foreach ($provinces as $province)
		<tbody>
			<tr>
				<td>{{$province->id}}</td>
				<td>{{$province->name}}</td>
				<td>
					<a href="{{route('province.edit', $province->id)}}" class="btn btn-primary">Edit</a>
					<form action="{{route('province.delete', $province->id)}}" method="POST">
						@csrf
						<button class="btn btn-danger" onclick="return confirmdelete()">Delete</button>
					</form>
				</td>
			</tr>
		</tbody>
      @endforeach
	</table>
</div>
</div>


<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add</a>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New District</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{-- {{route('province.update')}} --}}" method="POST">
        	@csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="recipient-name" value="">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>

	</div>
</div>


@endsection

<script>
	function confirmdelete(){

		var del = confirm('Are you sur to delete this !');
		if(del){
			return true;
		}else {
				return false;	
		}

	}


	$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>