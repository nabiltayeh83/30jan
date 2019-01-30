<h1>Edit Post</h1>

<a href='{{ route('posts.index') }}'><h3>Posts</h3></a>

<form action="{{ route('posts.update', $post->post_id) }}" method="post">

{{ csrf_field() }}
<input name="_method" type="hidden" value="PUT">

Title 
<input type="text" name="title" value='{{$post->title}}'>
<br><br>
Body 
<input type="text" name="body" value='{{$post->body}}'>
<hr>
<br>
<button type='submit'>Save</button>

</form>