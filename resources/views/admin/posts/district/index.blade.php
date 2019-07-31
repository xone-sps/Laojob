@extends('admin.main')
@section('content')
<div class="dashboard-wrapper">
	<div class="container-fluid dashboard-content">
		<div class="row">
			<h1>Province Infomation</h1>
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
					<form action="{{route('district.save')}}" method="POST">
							<div class="modal-body">
									@csrf
									<div class="form-group">
										<label for="recipient-name" class="col-form-label">Name</label>
										<input type="text" class="form-control" id="recipient-name" name="district_name">
									</div>
									<div class="form-group">
										<label for="message-text" class="col-form-label">Province</label>
										@if(count($provinces) > 0)
										<select class="custom-select custom-select-lg mb-3" name="province_name">
								{{-- 			<option selected>Open this select menu</option> --}}
											@foreach ($provinces as $pro)
											<option value="{{$pro->id}}">{{$pro->name}}</option>
											@endforeach
											@else
											<option value="">No Provinces post</option> 
											@endif
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
                   	</form>
						</div>
					</div>
				</div>

		<div class="card-body p-0">
			<div class="table-responsive">
				<table class="table">
					<thead class="bg-light">
						<tr class="border-0">
							<th class="border-0">ID</th>
							<th class="border-0">Province Name</th>
								<th class="border-0">Distric Name</th>
								<th class="border-0">Action</th>
						</thead>

						<tbody>
							@foreach($districts as $district)
							<tr>
								<td>{{$district->id}}</td>
								<td>{{$district->Province->name}}</td>
								<td>{{$district->name}}</td>
								<td>
									<a href="" class="btn btn-primary">Edit</a>
									<form action="" method="POST">
										@csrf
										<button class="btn btn-danger" onclick="return confirmdelete()">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>

					</table>
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