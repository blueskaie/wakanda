<div class="bloglist">
    @foreach($posts as $post)
        <div class="single_news_box">
            <div class="news_img">
                <a href="https://www.socialmedia.biz/how-to-increase-your-traffic-on-pinterest/">
                <img width="100" height="66" src="./Social Media News &amp; Business Strategies_files/howtoincrease-100x66.jpeg" class="attachment-thumbnail_custom size-thumbnail_custom wp-post-image" alt="" srcset="https://www.socialmedia.biz/wp-content/uploads/2018/09/howtoincrease-100x66.jpeg 100w, https://www.socialmedia.biz/wp-content/uploads/2018/09/howtoincrease-300x200.jpeg 300w, https://www.socialmedia.biz/wp-content/uploads/2018/09/howtoincrease-768x512.jpeg 768w, https://www.socialmedia.biz/wp-content/uploads/2018/09/howtoincrease-1024x682.jpeg 1024w, https://www.socialmedia.biz/wp-content/uploads/2018/09/howtoincrease-1080x719.jpeg 1080w" sizes="(max-width: 100px) 100vw, 100px">           </a>                                        
            </div>
            <div class="content_box">
                <div class="time_box">
                    2 weeks ago, by <a href="https://www.socialmedia.biz/author/floyd-zamora/" title="by Floyd Zamora" rel="author">{{$post->author?$post->author->name:'None Member'}}</a>  in 
                    <a href="https://www.socialmedia.biz/category/feature/" rel="category tag">Feature Stories</a>
                </div>
                <div class="news_title">
                    <a href="/posts/{{$post->id}}">{{$post->post_title}}</a>
                </div>    
            </div>
        </div>
    @endforeach
</div>