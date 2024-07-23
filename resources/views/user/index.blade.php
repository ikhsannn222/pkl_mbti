@extends('layouts.backend')
@section('content')
<h6 class="mb-0 text-uppercase">Data User</h6>
						<hr>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0 table-striped">
									<thead>
										<tr>
                                            <div class="col-lg-2">
                                            <a href="{{ route('user.create')}}" class="btn btn-success px-4 raised d-flex gap-2"><i class="material-icons-outlined">account_circle</i>Add user</a>
											<th scope="col">#</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
                                            <th scope="col">Is Admin</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($user as $data )
										<tr>
											<th scope="row">{{ $loop->index+1}}</th>
											<td>{{$data->name}}</td>
											<td>{{$data->email}}</td>
											<td>{{$data->is_admin ? 'Admin' : 'User'}}</td>
                                            <td><a href="{{ route('user.show', $data->id)}}" class="btn btn-primary px-5">Show</a>|<a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning px-5">Edit</a>
                                            <a class="btn ripple btn-danger px-5" href="#"onclick="event.preventDefault();
                                             document.getElementById('destroy-form').submit();">
                                            Hapus
                                         </a>

                                         <form id="destroy-form" action="{{ route('user.destroy', $data->id) }}"
                                            method="POST" class="d-none">
                                            @method('DELETE')
                                            @csrf
                                         </form>
                                         </td>
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
                @endsection
