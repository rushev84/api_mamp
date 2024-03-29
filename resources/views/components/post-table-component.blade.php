<style>
    .icon-container {
        display: flex;
        align-items: center;
    }
</style>

<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Order</th>
        <th>Id</th>
        <th>Title</th>
        <th>Content</th>
        <th>Slug</th>
        <th>Category</th>
        <th>Activity</th>
        <th>Created</th>
        <th>Updated</th>
        <th style="visibility: hidden">111</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{ $post->order }}</td>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ Str::limit($post->content) }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->category->title }}</td>
            <td>
                @if($post->is_active === 1)
                    Yes
                @else
                    No
                @endif
            </td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
            <td>
                <div class="icon-container">
                    <a href="{{ route('admin.posts.show', $post->id) }}" class="text-success"><i class="fas fa-eye icon mr-2"></i></a>
                    <a href="{{ route('admin.posts.edit', $post->id) }}"><i class="fas fa-pen icon mr-2"></i></a>
                    <a href="" class="text-danger"><i class="fas fa-trash-alt icon"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
