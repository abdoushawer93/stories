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
            <form action="{{ route('stories.update',$story) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <label for="title">Title</label>
                    <input  type="text" class="row-input" value="{{ $story->title }}" name="title" >
                    <div style="clear: both"></div>
                </div>
                <div class="row">
                    <label for="title">Content</label>
                    <textarea name="content" cols="" rows="7">{{ $story->content }}</textarea>
                    <div style="clear: both"></div>
                </div>
                <div class="row">
                    <button type="submit" class="btn-submit"><i class=" fa fa-check"></i> Update </button>
                </div>
            </form>
        </div>
    </body>
</html>
