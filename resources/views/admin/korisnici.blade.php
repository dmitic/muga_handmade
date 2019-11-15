@extends('admin.layout.app')

@section('page-header')
<h2 class="page-header">Korisnici <small>Lista svih korisnika</small></h2>
@endsection

@section('content')
<div class="card mb-3">
	<div class="card-header">
		<form action="/admin/pretraga" method="get">
			<div class="row">
				<div class="col-md-3 pull-right">
					<div class="input-group">
						<input type="text" name="str" class="form-control" placeholder="Korisničko ime, ime, prezime, email, grad...."
							value="{{ $_GET['str'] ?? '' }}">
						<span class="input-group-btn">
							<button class="btn btn-default">Traži!</button>
						</span>
					</div>
					<p class="help-block">Pretraga korisnika.</p>
				</div>
			</div>
		</form>
	</div>
	@error('poruka') 
    <div class="row  text-center">
      <div class="col-md-12">
        <div class="alert alert-success">{{ $message }}</div>
      </div>
    </div>
  @enderror
	<div class="card-body">
		<div class="table-responsive">
			@if (count($users) > 0)
			<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Korisničko ime</th>
						<th>Ime i Prezime</th>
						<th>Email</th>
						<th>Grad</th>
						<th>Role</th>
						<th>Registovan</th>
						<th style="text-align:center;">Akcija</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Korisničko ime</th>
						<th>Ime i Prezime</th>
						<th>Email</th>
						<th>Grad</th>
						<th>Role</th>
						<th>Registovan</th>
						<th style="text-align:center;">Akcija</th>
					</tr>
				</tfoot>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td><a href="{{ route('detalji', ['user' => $user->id]) }}" title="Detaljnije...">{{ $user->name }}</a></td>
						<td><a href="{{ route('detalji', ['user' => $user->id]) }}" title="Detaljnije...">{{ $user->details->first_name ?? '' }}
								{{ $user->details->last_name ?? ''  }}</a></td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->details->city ?? '' }}</td>
						<td>{{ $user->is_admin ? 'Admin' : 'User'}}</td>
						<td>{{ Carbon\Carbon::parse($user->created_at)->format('j. F Y.')}}</td>
						<td style="text-align:center; width:180px;">
							<form action="/admin/korisnici/{{$user->id}}" method="post">
								@csrf
								@method('DELETE')
								<a href="{{ route('izmeni', ['user' => $user->id]) }}" class="btn btn-primary" title="Izmeni korisnika">Izmeni</a>
								@if (Auth::User()->is_admin)
									@if (Auth::User()->id === $user->id)
										<button class="btn btn-danger" disabled>Obriši</button>
									@else
										<button class="btn btn-danger" onclick="return confirm('Da li si siguran da želiš da obišeš korisnika?')" title="Obriši korisnika">Obriši</button>
									@endif
								@endif
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@else
			Ne postoji korisnik <strong>{{ $_GET['str'] }}</strong>!
			@endif
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				{{ $users->appends(request()->input())->links() }}
				{{-- {{ isset($_GET['str']) ? $users->appends(['str' => $_GET['str'] ?? ''])->links() : $users->links() }} --}}
			</div>
		</div>
	</div>
</div>

@endsection