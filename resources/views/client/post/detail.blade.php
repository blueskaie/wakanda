<div class="post" id="post_detail">
    <div class="topwrap">
        <div class="userinfo pull-left">
            <div class="avatar">
                <img src="{{ asset('maintheme/images/avatar.jpg') }} " alt="" />
                <div class="status green">&nbsp;</div>
            </div>

            <div class="icons">
                <img src="{{ asset('maintheme/images/icon1.jpg') }} " alt="" /><img src="{{ asset('maintheme/images/icon4.jpg') }} " alt="" /><img src="{{ asset('maintheme/images/icon5.jpg') }} " alt="" /><img src="{{ asset('maintheme/images/icon6.jpg') }} " alt="" />
            </div>
        </div>
        <div class="posttext pull-left">
            <h2>{{$post->post_title?$post->post_title:'None'}}</h2>
            <p>{!!$post->post_content!!}</p>
        </div>
        <div class="clearfix"></div>
    </div>                              
    <div class="postinfobot">

        <div class="likeblock pull-left">
            <a href="#" class="up"><i class="fa fa-thumbs-o-up"></i>25</a>
            <a href="#" class="down"><i class="fa fa-thumbs-o-down"></i>3</a>
        </div>

        <!-- <div class="prev pull-left">                                        
            <a href="#"><i class="fa fa-reply"></i></a>
            <a onclick="showCreateForm({{$post->id}}, 0)"><i class="fa fa-reply" style="line-height: inherit; color:#989c9e">&nbsp;&nbsp;&nbsp;reply</i></a>
        </div> -->

        <div class="posted pull-left"><i class="fa fa-clock-o"></i> Posted on : 20 Nov @ 9:30am</div>

        <div class="next pull-right">                                        
            <!-- <a href="#"><i class="fa fa-share"></i></a> -->
            <a onclick="showCreateForm({{$post->id}}, 0)"><i class="fa fa-reply" style="line-height: inherit; color:#989c9e"></i></a>
            <a href="#"><i class="fa fa-flag"></i></a>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
