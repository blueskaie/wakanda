<div  id="ajaxform" style="margin-left:50px">
    <div class="post">
        <!-- <form class="form"> -->
            <div class="topwrap">
                <div class="userinfo pull-left">
                    <div class="avatar">
                        <img src="//www.gravatar.com/avatar/4b930670f87f198c0a7630da2462407a?s=50&r=g&d=mm" alt="" />
                        <!-- <div class="status red">&nbsp;</div> -->
                    </div>

                </div>
                <div class="posttext pull-left">
                    <div class="textwraper">
                        <!-- <input type="text" name="note" id="post_id" value="{{$post_id}}" />
                        <input type="text" name="note" id="comment_id" value="{{$comment_id}}" /> -->
                        <textarea name="reply" id="reply" placeholder="Type your message here"></textarea>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>                              
            <div class="postinfobot">

                <div class="notechbox pull-left">
                    <input type="checkbox" name="note" id="note" class="form-control" />
                </div>

                <div class="pull-left">
                    <label for="note"> Email me when some one post a reply</label>
                </div>

                <div class="pull-right postreply">
                    <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                    <div class="pull-left"><button type="submit" class="btn btn-primary" onclick="postReply({{$post_id}},{{$comment_id}})">Post Reply</button></div>
                    <div class="clearfix"></div>
                </div>


                <div class="clearfix"></div>
            </div>
        <!-- </form> -->
    </div>
</div>