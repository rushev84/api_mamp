<h5>Order</h5>
<div style="width: 700px">
    {{ $post->order }}
</div>
<br>
<h5>Id</h5>
<div style="width: 700px">
    {{ $post->id }}
</div>
<br>
<h5>Title</h5>
<div style="width: 700px">
    {{ $post->title }}
</div>
<br>
<h5>Content</h5>
<div style="width: 700px">
    {{ $post->content }}
</div>
<br>
<h5>Slug</h5>
<div style="width: 700px">
    {{ $post->slug }}
</div>
<br>
<h5>Image</h5>
<div style="width: 700px">
    <img src="{{ $post->image }}" alt="">
</div>
<br>
<h5>Category</h5>
<div style="width: 700px">
    {{ $post->category->title }}
</div>
<br>
<h5>Activity</h5>
<div style="width: 700px">
    {{ $post->is_active === 1 ? 'Yes' : 'No' }}
</div>
<br>
<h5>Created</h5>
<div style="width: 700px">
    {{ $post->created_at }}
</div>
<br>
<h5>Updated</h5>
<div style="width: 700px">
    {{ $post->updated_at }}
</div>
