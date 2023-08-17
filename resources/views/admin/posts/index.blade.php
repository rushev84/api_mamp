@extends('admin.layouts.base')

@section('content')

    @include('admin.includes.sidebar')

    @component('components.content-wrapper-component')

        @component('components.content-header-component', [
            'title' => 'Posts',
            ])
        @endcomponent

        @component('components.content-component')

            @component('components.card-component')

                @component('components.post-table-component', [
                    'posts' => $posts,
                    ])
                @endcomponent

            @endcomponent

        @endcomponent

    @endcomponent

@endsection
