@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center">
        <h2 class="fs-4 text-secondary my-4">
            {{$project->title}}
        </h2>
        <p>{{$project->content}}</p>
    </div>
</div>
@endsection