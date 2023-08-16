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
                                <th>Category_id</th>
                                <th>Created</th>
                                <th>Updated</th>
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
                                    <td>{{ $post->category_id }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->updated_at }}</td>
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
