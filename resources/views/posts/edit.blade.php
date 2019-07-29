@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                投稿の編集
            </h1>

            <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                @csrf
                @method('PUT')

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            タイトル
                        </label>
                        <input
                            id="title"
                            name="title"
                            class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                            value="{{ old('title') ?: $post->title }}"
                            type="text"
                        >
                        @if ($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="message">
                            メッセージ
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('message') ?: $post->message }}</textarea>
                        @if ($errors->has('message'))
                            <div class="invalid-feedback">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-default" href="{{ route('posts.show', ['post' => $post]) }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-info">
                            更新する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

@section('footer')
    <div class="d-flex justify-content-center mb-5">
        copyright 2019 sato.
    </div>
@endsection
