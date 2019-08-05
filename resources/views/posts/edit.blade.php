@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                本の編集
            </h1>

            <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">
                @csrf
                @method('PUT')

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="name">
                            著者名
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="{{ old('name') ?: $post->name }}"
                            type="text"
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="kana">
                            ﾁｮｼｬﾒｲ（フリガナ）
                        </label>

                        <textarea
                            id="kana"
                            name="kana"
                            class="form-control {{ $errors->has('kana') ? 'is-invalid' : '' }}"
                            rows="4"
                        >{{ old('kana') ?: $post->kana }}</textarea>
                        @if ($errors->has('kana'))
                            <div class="invalid-feedback">
                                {{ $errors->first('kana') }}
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
