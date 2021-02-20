<h1>User information</h1>
<table>
<th>Mesasge:</th>
<td>@foreach($data as $message)
{{$message['message']}}
@endforeach
</td>
</table>