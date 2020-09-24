<html>
<head>
    <meta charset="utf-8" />
    <title>Posts</title>
</head>
<body>
<h4>All Posts</h4>
<hr>
<a href="{{ route('posts.create') }}">Create New Post</a>
<ul>
    @foreach($posts as $post)
    <li>
        <a href="{{ route('posts.show',$post)  }}"> {{ $post->title }} </a>
        <a href="{{ route('posts.edit',$post) }}"> Edit </a>
        <form action="{{ route('posts.destroy',$post) }}" method="post" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>
</body>
</html>
