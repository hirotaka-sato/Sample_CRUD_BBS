@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                本の新規登録
            </h1>

            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="name">
                            著者
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="{{ old('name') }}"
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
                        >{{ old('kana') }}</textarea>
                        @if ($errors->has('kana'))
                            <div class="invalid-feedback">
                                {{ $errors->first('kana') }}
                            </div>
                        @endif
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('top') }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            登録する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
