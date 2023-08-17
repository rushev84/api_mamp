@extends('admin.layouts.base')

@section('content')

    @include('admin.includes.sidebar')

    @component('components.content-wrapper-component')

        @component('components.content-header-component', [
            'title' => 'Edit post',
            ])
        @endcomponent

        @component('components.content-component')

            @component('components.card-component')

                @component('components.post-edit-component', [
                    'post' => $post,
                    'categories' => $categories,
                    ])
                @endcomponent

            @endcomponent

        @endcomponent

    @endcomponent

@endsection
