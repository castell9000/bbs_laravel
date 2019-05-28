@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>FreeBoard</h1>
        <hr/>

        <table class="table table-striped text-center">
            <th class="text-center">번호</th>
            <th class="text-center">쿠폰 번호</th>
            <th class="text-center">사용 유저</th>
            <th class="text-center">사용 일시</th>
            @forelse($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td><a href="/article/{{ $article->id }}">{{ $article->title }}</a></td>
                    <td>{{ $article->user['name']}}</td>
                    @if($article->updated_at === '')
                        <td>{{ $article->created_at }}</td>
                    @else
                        <td>{{ $article->updated_at }}</td>
                    @endif
                </tr>
            @empty
                <p>쿠폰이 없습니다.</p>
            @endforelse
        </table>

    </div>

    @if($articles->count())
        <div class="text-center">
            {!! $articles->render() !!}
        </div>
    @endif

@stop
