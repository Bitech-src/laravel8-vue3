@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HOME') }}</div>

                <div class="card-body">
                    <div class="d-grid gap-2 col-6 mx-auto">
                    @foreach ( $_utiwake_name as $_name )
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection