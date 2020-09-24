<html>
    <head>
        <meta charset="utf-8" />
        <title>Stories</title>
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    </head>
    <body>
        <h1 class="title"><i class="fa fa-book"></i> Story Book </h1>
        <div class="links">
            <a href="{{ route('stories.create') }}"><i class="fa fa-plus"></i> ADD STORY</a>
            <a href="{{ route('stories.index') }}"><i class="fa fa-list-ul"></i> STORIES</a>
        </div>
        <div class="items">
            <h2>{{ $story->title }}</h2>
            <p>{{ $story->content }}</p>
        </div>
    </body>
</html>
