<h1>Users Data</h1>



@if(isset($results))

    @foreach($results as $r)
    {{$r->id}}<br> 
    <b>{{$r->name}}</b><br>
    {{$r->email}}<br>
    {{$r->age}}<br>
    <a href="/users/delete/{{$r->id}}">Delete</a><hr>
    @endforeach

@endif