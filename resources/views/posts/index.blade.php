@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="mb-4">
            <a href="{{ route('posts.create') }}" class="btn btn-info">
                投稿の新規作成
            </a>
        </div>
        @foreach ($posts as $post)
            <div class="table">
            <table class="table table-striped">
                <div class="card-header">
                    {{ $post->name }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {!! nl2br(e(str_limit($post->kana, 100))) !!}
                    </p>
                </div>
                <a class="card-info" href="{{ route('posts.show', ['post' => $post]) }}">
                    詳細画面
                </a>
                <div class="card-footer">
                    <span class="mr-2">
                        更新日時 {{ $post->updated_at->format('y.m.d') }}
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

@section('footer')
    <div class="d-flex justify-content-center mb-5">
        copyright 2019 sato.
    </div>
@endsection
