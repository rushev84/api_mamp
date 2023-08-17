@extends('admin.layouts.base')

@section('content')

    @include('admin.includes.sidebar')

    @component('components.content-wrapper-component')

        @component('components.content-header-component', [
            'title' => 'View post',
            ])
        @endcomponent


{{--        @component('components.post-table-component', [--}}
{{--            'posts' => $posts,--}}
{{--            ])--}}
{{--        @endcomponent--}}

    @endcomponent

@endsection
