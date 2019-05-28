@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="content">
            <div class="title">
                <h3>{{ $article->title}} </h3>
                <p> by <strong>{{ $article->user['name'] }}</strong></p>
                <hr/>
            </div>

            <div class="context">
                {{ $article->context }}
            </div>
        </div>
        <hr/>

        <div class="comment_div">

            <div class="comment_write">
                <form action="{{ route('comment.store') }}" method="POST">
                    <div class="form-group">
                        <h5 name="user_name"> {{ $user->name }} </h5>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input type="text" name="comment" class="form-control" placeholder="댓글을 입력해주세요" value="{{ old('comment') }}" autofocus/>
                        {!! $errors->first('comment', '<span class="form-error">:message</span>') !!}
                    </div>

                    <div class="form-group row mb-sm-3">
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="comment_read">
                @forelse($comments as $comment)
                    <div class="comments">
                        <h5 name="comments_writer"> {{ $comment->user['name'] }} </h5>

                        <div class="comment_context">
                            {{ $article->context }}
                        </div>
                    </div>
                @empty
                    <p> 댓글이 없는 게시글입니다. </p>
                @endforelse
            </div>
        </div>

    </div>

@stop
