<div>
{{--    <div class="form-group w-50">--}}
{{--        <label for="id">Order</label>--}}
{{--        <input class="form-control" id="order" value="{{ $post->order }}">--}}
{{--    </div>--}}
    <div class="form-group w-50">
        <label for="id">Id</label>
        <input class="form-control" id="id" value="{{ $post->id }}">
    </div>
    <div class="form-group w-50">
        <label for="title">Title</label>
        <input class="form-control" id="title" value="{{ $post->title }}">
    </div>
    <div class="form-group w-50">
        <label>Content</label>
        <textarea id="summernote">
            {{ $post->content }}
        </textarea>
    </div>
    <div class="form-group w-50">
        <label for="slug">Slug</label>
        <input class="form-control" id="slug" value="{{ $post->slug }}">
    </div>
{{--    <div class="form-group w-50">--}}
{{--        <label for="exampleInputFile">Image</label>--}}
{{--        <div class="input-group">--}}
{{--            <div class="custom-file">--}}
{{--                <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                <label class="custom-file-label" for="exampleInputFile">{{ $post->image }}</label>--}}
{{--            </div>--}}
{{--            <div class="input-group-append">--}}
{{--                <span class="input-group-text">Upload</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="form-group w-50">
        <label>Category</label>
        <select class="form-control">
            @foreach($categories as $category)
                <option {{ $category->id === $post->category->id ? 'selected' : ''}}>{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
{{--    <div class="form-group">--}}
{{--        <div class="custom-control custom-switch">--}}
{{--            <input type="checkbox" class="custom-control-input" id="activity">--}}
{{--            <label class="custom-control-label" for="activity">Activity</label>--}}
{{--        </div>--}}
{{--    </div>--}}

</div>
