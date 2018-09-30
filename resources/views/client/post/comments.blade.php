
@foreach($comments as $comment)
    <!-- POST -->
    <div style="margin-left:50px">
        @include('client/post/ajaxcomment')
        @if ($comment->children)
            @include('client/post/comments', ['comments'=>$comment->children])
        @endif
    </div>
@endforeach

