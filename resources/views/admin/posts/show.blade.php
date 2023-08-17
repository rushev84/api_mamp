@extends('admin.layouts.base')

@section('content')

    @include('admin.includes.sidebar')

    @component('components.content-wrapper-component')

        @component('components.content-header-component', [
            'title' => 'View post',
            ])
        @endcomponent

        @component('components.content-component')

            @component('components.card-component')

                @component('components.post-view-component', [
                    'post' => $post,
                    ])
                @endcomponent

            @endcomponent

        @endcomponent

    @endcomponent

@endsection
