@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HOME') }}</div>

                <div class="card-body">
                    <span>【TODO】 ボタンを押して遷移するようにする</span>
                    <div class="d-grid gap-2 col-6 mx-auto">    
                    @php 
                        // TODO ロールをコントローラ側で取得しViewに渡す
                        $array = ['admin','user'];
                    @endphp
                    @foreach ( $array as $val )
                        @php 
                            if($val == 'admin') $name = '管理者';
                            if($val == 'user') $name = 'ユーザ';
                            $url = '/' . $val .'/home';
                        @endphp
                        <a href="{{ url($url) }}" class="btn btn-primary">{{ $name }}</a>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection