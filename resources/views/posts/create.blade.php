<html>
<head>
    <meta charset="utf-8" />
    <title>Posts</title>
</head>
<body>
<a href="{{ route('posts.index')  }}">All Posts</a>

<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="">Title :</label> <br>
    <input type="text" name="title">
    <br><br>
    <label for="">Body : </label> <br>
    <textarea cols="30" rows="10" name="body"></textarea> <br><br>
    <button type="submit">Save</button>
</form>
</body>
</html>
