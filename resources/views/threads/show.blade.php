@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{ $thread->title }} </div>

                    <div class="card-body">
                            <article class="body">
                                {{ $thread->body }}
                            </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @foreach($thread->replies as $reply)
                        <div class="card-header"><a href="#">{{ $reply->owner->name }} </a>
                            said {{ $reply->created_at->diffForHumans() }}.... </div>
                        <div class="card-body">
                            <article class="body">
                                {{ $reply->body }}
                            </article>
                        </div>

                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

