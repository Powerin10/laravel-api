@foreach($articles as $value)
	<h1>{{ $value->title }}</h1>
	<p>Posted By: {{ $value->tester->name }}</p>
	<p>{{ $value->body }}</p>
@endforeach