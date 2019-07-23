@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Label</div>

                <div class="card-body">
                    @foreach($lessons as $lesson)
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                            {{ $lesson->video}}
                            </div>
                            <div class="card-body">
                                <h1>{{ $lesson->title }}<h1>
                                <p>{{ $lesson->description}}</p>
                                <hr>
                                <p>{{ $lesson->rating }}</p>
                                <p>{{ $lesson->created_at }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            <div>
                {{$lessons->links()}}
            </div>
        </div>
    </div>

@endsection