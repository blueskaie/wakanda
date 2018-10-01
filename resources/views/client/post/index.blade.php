@extends('layouts.main')

@section('mycss')
    <link href="{{ asset('maintheme/css/blogstyle.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('plugins/emoji/css/jquery.emojipicker.css') }}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="{{ asset('plugins/emoji/js/jquery.emojipicker.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/emoji/css/jquery.emojipicker.tw.css') }}">
    <script type="text/javascript" src="{{ asset('plugins/emoji/js/jquery.emojis.js') }}"></script> -->
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 breadcrumbf">
                    <a href="#">Borderlands 2</a> <span class="diviver">&gt;</span> <a href="#">General Discussion</a> <span class="diviver">&gt;</span> <a href="#">Topic Details</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    @if ($post)
                        @include('client/post/detail')
                        <div id="comments-list">
                        @if ($comments)
                            {{ $comments->links() }}
                            @include('client/post/comments')
                            {{ $comments->links() }}
                        @endif
                        </div>
                    @else
                        <div>There is no tranctions</div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-4">
                    <!-- -->
                    <div class="sidebarblock">
                        <h3>Categories</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <ul class="cats">
                                <li><a href="#">Trading for Money <span class="badge pull-right">20</span></a></li>
                                <li><a href="#">Vault Keys Giveway <span class="badge pull-right">10</span></a></li>
                                <li><a href="#">Misc Guns Locations <span class="badge pull-right">50</span></a></li>
                                <li><a href="#">Looking for Players <span class="badge pull-right">36</span></a></li>
                                <li><a href="#">Stupid Bugs &amp; Solves <span class="badge pull-right">41</span></a></li>
                                <li><a href="#">Video &amp; Audio Drivers <span class="badge pull-right">11</span></a></li>
                                <li><a href="#">2K Official Forums <span class="badge pull-right">5</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- -->
                    <div class="sidebarblock">
                        <h3>Poll of the Week</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <p>Which game you are playing this week?</p>
                            <form action="#" method="post" class="form">
                                <table class="poll">
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                                    Call of Duty Ghosts
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt1" type="radio" name="opt" value="1">  
                                            <label for="opt1"></label>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color2" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 63%">
                                                    Titanfall
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt2" type="radio" name="opt" value="2" checked>  
                                            <label for="opt2"></label>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar color3" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                                    Battlefield 4
                                                </div>
                                            </div>
                                        </td>
                                        <td class="chbox">
                                            <input id="opt3" type="radio" name="opt" value="3">  
                                            <label for="opt3"></label>  
                                        </td>
                                    </tr>
                                </table>
                            </form>
                            <p class="smal">Voting ends on 19th of October</p>
                        </div>
                    </div>

                    <!-- -->
                    <div class="sidebarblock">
                        <h3>My Active Threads</h3>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">This Dock Turns Your iPhone Into a Bedside Lamp</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Who Wins in the Battle for Power on the Internet?</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Sony QX10: A Funky, Overpriced Lens Camera for Your Smartphone</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">FedEx Simplifies Shipping for Small Businesses</a>
                        </div>
                        <div class="divline"></div>
                        <div class="blocktxt">
                            <a href="#">Loud and Brave: Saudi Women Set to Protest Driving Ban</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('myjs')
    <script>
     function showCreateForm(post_id, comment_id){
        event.defaultPrevented;
        // alert(comment_id);
        $("#ajaxform").remove();
        $.ajax({
            type: "GET", 
            url: "../comments/create",
            data: {'post_id':post_id, 'comment_id':comment_id},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(result){
                if (comment_id)
                    $("#comment-"+comment_id).parent().append(result);
                else
                    $("#post_detail").after(result);
            }
        });
     };
     function postReply(post_id, comment_id){
        event.defaultPrevented;
        reply_text = $("#reply").val();
        $.ajax({
            type: "POST", 
            url: "../comments",
            data: {'post_id':post_id, 'comment_id':comment_id, 'reply_text':reply_text},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(result){
                $("#ajaxform").remove();
                if (comment_id)
                    $("#comment-"+comment_id).parent().append("<div style='margin-left:50px'>"+result+"</div>");          
                else
                    $("#comments-list").append("<div style='margin-left:50px'>"+result+"</div>");
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                alert(msg);
            },
        });
     }
    </script>
    <!-- <script type="text/javascript">
        $(document).ready(function(e) {
            $('#toggle').click(function(e) {
            e.preventDefault();
            $('#text-custom-trigger').emojiPicker({
                width: '300px',
                height: '200px',
                button: false
            });
            $('#text-custom-trigger').emojiPicker('toggle');
            });

            // keyup event is fired
            $(".emojiable-question, .emojiable-option").on("keyup", function () {
            //console.log("emoji added, input val() is: " + $(this).val());
            });

        });
    </script> -->


@endsection