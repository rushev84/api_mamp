<div>
    <form action="{{ route('admin.posts.store', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group w-50">
            <label for="id">Id</label>
            <input class="form-control" id="id" name="id" value="{{ $post->id }}">
        </div>
        <div class="form-group w-50">
            <label for="title">Title</label>
            <input class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group w-50">
            <label>Content</label>
            <textarea id="summernote" name="content">
                {{ $post->content }}
            </textarea>
        </div>
        <div class="form-group w-50">
            <label for="slug">Slug</label>
            <input class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
        </div>
        <div class="form-group w-50">
            <label for="image">Image</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">{{ $post->image }}</label>
                </div>
{{--                <div class="input-group-append">--}}
{{--                    <span class="input-group-text">Upload</span>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="form-group w-50">
            <label>Category</label>
            <select class="form-control" name="category">
                @foreach($categories as $category)
                    <option {{ $category->id === $post->category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
    {{--    <div class="form-group">--}}
    {{--        <div class="custom-control custom-switch">--}}
    {{--            <input type="checkbox" class="custom-control-input" id="activity">--}}
    {{--            <label class="custom-control-label" for="activity">Activity</label>--}}
    {{--        </div>--}}
    {{--    </div>--}}
        <button type="submit" class="btn btn-block btn-primary w-50">Save</button>
    </form>
</div>
