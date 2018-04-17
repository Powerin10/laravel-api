@foreach($users->articles as $value)
	{{ $value->body  }}
	<br>
@endforeach


{{ $users->name }}


<p>Address {{ $users->address->country }}</p>