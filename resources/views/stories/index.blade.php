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
        @if($stories->isEmpty())
            <div class="content">
                <h1>No Story Found</h1>
                <p>Create a story first , to read ..</p>
            </div>
        @else
            <div class="items">
                @if(isset($success) && $success == true)
                    <p class="alert-success"> Story is Successfully Saved </p>
                    <meta http-equiv="refresh" content="5;{{ route('stories.index') }}" />
                @endif
                @if(isset($deleted) && $deleted == true)
                    <p class="alert-success"> Story is Successfully Deleted </p>
                    <meta http-equiv="refresh" content="5;{{ route('stories.index') }}" />
                @endif
                @foreach($stories as $story)
                    <div class="item">
                        <a href="{{ route('stories.show',$story) }}"><i class="fa fa-arrow-right"></i> {{ substr($story->title ,0 ,20) }} </a>
                        <p> <i class="fa fa-indent"></i> {{ substr($story->content ,0 ,50) }} ...</p>
                        <div class="buttons">
                            <a href="{{ route('stories.show',$story) }}" class="btn"><i class="fa fa-list-ul"></i> Details</a>
                            <a href="{{ route('stories.edit',$story) }}" class="btn"><i class="fa fa-edit"></i> Edit</a>
                            <form action="{{ route('stories.destroy',$story) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa fa-trash"></i> Delete </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </body>
</html>
