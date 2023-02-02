@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ユーザ編集') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="col-md-4">
                        <test-vue placeholder="サンプル" name="inputtext" lavel="項目名" type="text"></test-vue>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection