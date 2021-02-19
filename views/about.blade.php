<x-header data="Header data"/>
@foreach($name as $user)
<h1>{{$user}}</h1>
@endforeach
@csrf
<script>
var item = @json($name);
console.warn(item);
</script>
@include ('welcome')
