<x-header titleComponent="User page"/>
<h1>Users</h1>


@if(count($context)>0)
	@foreach($context['data'] as $key=>$value)
		<h1>{{$key}}=>{{$value}}</h1>
	@endforeach
@endif

@foreach($context['list'] as $key)
	<h1>Item : {{$key}}</h1>
@endforeach


@include('footer')
