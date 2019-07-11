@extends('admin.main')
@section('content')
<div class="dashboard-wrapper">
	<div class="dashboard-ecommerce">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h5>All Post jobs Total job are <b>{{$total}}</b></h5>
						</div>
						<div class="col">
							<a class="btn btn-primary float-right" href="{{route('job.add')}}">Add job</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form action="{{route('search')}}" method="get" accept-charset="utf-8">
						<div class="row">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for..." name="search">
								<span class="input-group-btn">
									<button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
								</span>
							</div>				      
						</div>
					</form>
				</div>
				<div class="card-body p-0">
					<div class="table-responsive">
						<table class="table">
							<thead class="bg-light">
								<tr class="border-0">
									<th class="border-0">#</th>
									<th class="border-0">Title</th>
									<th class="border-0">Company name</th>
									<th class="border-0">Location</th>
									<th class="border-0">Image</th>
									<th class="border-0">Updated</th>
									<th class="border-0">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($alljob as $job)
								<tr>
									<td>{{$job->id}}</td>
									<td>{{$job->title}}</td>
									<td>{{$job->company_name}}</td>
									<td>{{$job->location}}</td>
									<td>
										<div class="m-r-10"><img src="/images/{{$job->logo}}" alt="user" class="rounded" width="45"></div>
									</td>
									<td>{{$job->updated_at}}</td>
									<td>
										<div class="float-left btn-group">
											<a href="{{route('job.edit', $job->id)}}" class="btn btn-primary btn-edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<form action="{{route('job.delete', $job->id)}}" method="POST">
												@csrf
												<input type="hidden" name="_token" value="{{csrf_token()}}">
												<button onclick="return confirmdelete()" class="btn btn-danger btn-delete" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
											</form> 
										</div>

									</td>
								</td>
							</tr>
							@endforeach
						</tbody>
     {{--                                      <tr>
                                            <td><a href="{{}}" class="btn btn-outline-light float-right">View Details</a></td>
                                        </tr> --}}
                                    </table>
                                    <div class="paginate-center">
                                    	<nav aria-label="Page navigation example">
                                    		{{ $alljob->links() }}

                                    	</nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

            <script>
            	function confirmdelete(){
            		return confirm("Are you sure to delete this ?")
            	}
            </script>