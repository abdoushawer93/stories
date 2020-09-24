<html>
<head>
    <meta charset="utf-8" />
    <title>Posts</title>
</head>
<body>
<a href="{{ route('posts.index')  }}">All Posts</a>

<form action="{{route('posts.update',$post)}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Title :</label> <br>
    <input type="text" name="title" value="{{$post->title}}">
    <br><br>
    <label for="">Body : </label> <br>
    <textarea cols="30" rows="10" name="body">{{$post->body}}</textarea> <br><br>
    <button type="submit">Save</button>
</form>
</body>
</html>
