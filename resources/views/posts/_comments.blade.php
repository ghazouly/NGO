@if($comments)
    <ul style="list-style: none; padding: 0">
        @foreach($comments as $comment)
            <li class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <h3>{{ $comment->author->name }}</h3>
                        <p>{{ $comment->created_at->format('M d,Y \a\t h:i a') }}</p>
                    </div>
                    <div class="list-group-item">
                        <p>{{ $comment->body }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

@endif