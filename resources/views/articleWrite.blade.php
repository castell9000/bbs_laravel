@extends('layouts.app')

@section('content')
    <div class="container" style="margin-left: 15%">
        <div class="col-md-8">
            <div class="card-body" >
                <form action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input type="text" name="title" class="form-control" placeholder="제목을 입력해주세요." value="{{ old('title') }}" autofocus/>
                        {!! $errors->first('title', '<span class="form-error">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <textarea name="content" id="content" class="form-control" cols="50" rows="20" placeholder="내용을 입력해주세요." value="{{ old('content') }}" autofocus></textarea>
                        {!! $errors->first('content', '<span class="form-error">:message</span>')!!}
                    </div>

                    <div class="form-group row mb-0">
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop