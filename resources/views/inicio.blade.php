@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="card">
			<div class="card-header">
				Prueba de configuración de dominios para aceptar CNAME
			</div>
			<div class="card-body">
				@if($type == 'external_domain')
					<h2>Estás accediendo desde un dominio exteno a la plataforma</h2>
					Dominio: <h3>{{$domain}}</h3>
				@elseif($type == 'external_subdomain_domain')
					<h2>Estás accediendo desde un subdominio de un dominio exteno a la plataforma</h2>
					Subdominio: <h3>{{$subdomain}}</h3>
					Dominio: <h3>{{$domain}}</h3>
				@elseif($type == 'internal_subdomain')
					<h2>Estás accediendo desde un subdominio interno de la plataforma</h2>
					Subdominio: <h3>{{$subdomain}}</h3>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection