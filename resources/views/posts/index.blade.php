@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-info">
                投稿を新規作成する
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="table">
            <table class="table table-striped">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {!! nl2br(e(str_limit($post->message, 200))) !!}
                    </p>
                </div>
                <a class="card-info" href="{{ route('posts.show', ['post' => $post]) }}">
                    続きを読む
                </a>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                    </span>
                </div>
            </table>
            </div>
        @endforeach
        <div class="d-flex justify-content-center mb-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
