<style>
    .icon-container {
        display: flex;
        align-items: center;
    }
</style>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
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
                                    <td>{{ $post->is_active }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
                                    <td>
                                        <div class="icon-container">
                                            <a href="{{ route('admin.posts.show', 2005) }}" class="text-success"><i class="fas fa-eye icon mr-2"></i></a>
                                            <a href=""><i class="fas fa-pen icon mr-2"></i></a>
                                            <a href="" class="text-danger"><i class="fas fa-trash-alt icon"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
