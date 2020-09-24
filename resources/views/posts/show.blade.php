<html>
<head>
    <meta charset="utf-8" />
    <title>Posts</title>
</head>
<body>
<a href="{{ route('posts.index')  }}">All Posts</a>
<h4>Show Post : </h4>
<hr>
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
</body>
</html>
