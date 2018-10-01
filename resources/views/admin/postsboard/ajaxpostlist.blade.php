<table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="m_table_1">
    <thead>
        <tr>
            <th class="">
                PostID
            </th>
            <th class="hidden-xs">
                Author
            </th>
            <th>
                Title
            </th>
            <th class="hidden-xs hidden-md">
                Created_At
            </th>
            <th  class="hidden-xs hidden-md">
                Type
            </th>
            <th  class="hidden-xs">
                Status
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody id="postslist">
        @foreach ($posts as $post)
        <tr id="post-{{$post->id}}">
            <td>
                {{$post->id}}
            </td>
            <td class="hidden-xs">
                {{$post->author?$post->author->name:'None Member'}}
            </td>
            <td>
                {{strlen($post->post_title)>50?substr($post->post_title, 0, 50).'...':$post->post_title}}
            </td>
            <td class="hidden-xs hidden-md">
                {{$post->post_date}}
            </td>
            <td class="hidden-xs hidden-md">
                {{$post->post_type}}
            </td>
            <td class="hidden-xs">
                {{$post->post_status}}
            </td>
            <td>
                <a class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" onclick="editPost({{$post->id}})"><i class="la la-edit"></i></a>
                <a class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" onclick="deletePost({{$post->id}})"><i class="la la-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- {!! $posts->render() !!} -->
{{ $posts->links() }}
<!-- <div id="paginate">{{$posts->links()}}</div> -->
