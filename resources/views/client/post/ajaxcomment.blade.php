<div class="post" id="comment-{{$comment->id}}">
    <div class="topwrap">
        <div class="userinfo pull-left">
            <div class="avatar">
                <!-- <img src="{{ asset('maintheme/images/avatar2.jpg') }} " alt="" /> -->
                <img src="//www.gravatar.com/avatar/4b930670f87f198c0a7630da2462407a?s=50&r=g&d=mm">
                <!-- <div class="status red">&nbsp;</div> -->
            </div>

            <!-- <div class="icons">
                <img src="{{ asset('maintheme/images/icon5.jpg') }} " alt="" /><img src="{{ asset('maintheme/images/icon6.jpg') }} " alt="" />
            </div> -->
        </div>
        <div class="posttext pull-left">
            <p>{!!$comment->comment_content!!}</p>
        </div>
        <div class="clearfix"></div>
    </div>                              
    <div class="postinfobot row">
        <!-- <div class="col-xs-3">
            <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>10</a>
            <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>1</a>
        </div> -->
        <div class="hidden-xs col-sm-8"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:45am</div>
        <div class="col-xs-12 col-sm-4">                                        
            <a onclick="showCreateForm({{$comment->comment_post_id}},{{$comment->id}})"><i class="fa fa-reply pull-right" style="line-height: inherit; color:#989c9e">&nbsp;&nbsp;&nbsp;reply</i></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>