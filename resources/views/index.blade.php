

<h1>All Posts</h1>

<a href='{{ route('posts.create') }}'><h3>Create New Post</h3></a>

@foreach($results as $r)
<b>{{$r->title}}</b>
<br>
{{$r->body}}
<br>
<a href="{{ route('posts.edit', $r->post_id) }}">Edit</a>

<hr><br>

@endforeach
