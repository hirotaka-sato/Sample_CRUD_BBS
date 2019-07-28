@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <div class="mb-4 text-right">
                <a class="btn btn-primary" href="{{ route('posts.edit', ['post' => $post]) }}">
                    編集する
                </a>
                <form
                    style="display: inline-block;"
                    method="POST"
                    action="{{ route('posts.destroy', ['post' => $post]) }}"
                >
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">削除する</button>
                </form>
            </div>
            <h1 class="h5 mb-4">
                {{ $post->title }}
            </h1>

            <p class="mb-5">
                {!! nl2br(e($post->message)) !!}
            </p>

        </div>
    </div>
@endsection
