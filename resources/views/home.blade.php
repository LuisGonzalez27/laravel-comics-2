@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="my-container">
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary">
                <a class="text-uppercase strong" href="{{ route('comics.index') }}">see comics</a>
                </button>
        </div>
    </div>
</div>
@endsection