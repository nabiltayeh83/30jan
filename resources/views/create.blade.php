<h1>Create Post</h1>

<a href='{{ route('posts.index') }}'><h3>Posts</h3></a>


@if($errors->any())
<ul>
    @foreach($errors->all() as $error)  
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif


{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}

{{ csrf_field() }}

{!! Form::label('title_itm', 'Title') !!}

{!! Form::text('title', null, ['placeholder' => 'Enter Title']) !!}

<br><br>
{!! Form::label('title_itm', 'Body') !!}

{!! Form::textarea('body', null, ['placeholder' => 'Body']) !!}


<hr>
<br>
<button type='submit'>Save</button>

{!! Form::close() !!}