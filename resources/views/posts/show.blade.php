@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="table">
            <div class="mb-4 text-right">
                <a class="btn btn-info" href="{{ route('posts.edit', ['post' => $post]) }}">
                    編集する
                </a>
                <form
                    style="display: inline-block;"
                    method="POST"
                    action="{{ route('posts.destroy', ['post' => $post]) }}"
                >
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-warning">削除する</button>
                </form>
            </div>
            <table class="table table-bordered&gt table-dark">
            <h1 class="h5 mb-4">
                {{ $post->title }}
            </h1>
            </table>
            <table class="table table-bordered&gt">
            <table class="table table-striped">
            <p class="mb-5">
                {!! nl2br(e($post->message)) !!}
            </p>
            </table>
            </table>
        </div>
    </div>
@endsection

@section('footer')
    <div class="d-flex justify-content-center mb-5">
        copyright 2019 sato.
    </div>
@endsection
