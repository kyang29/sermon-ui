@extends('layouts.app')

@section('content')
<div class="row">
    <table class="table shadow smooth-border-radius">
        <thead>
            <tr>
                <th scope="col">Sermon Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($response['data'] as $sermon)
            <tr>
                <td><a href={{$sermon['id']}} class="font-weight-bold">{{$sermon['title']}}</a></td>
                <td>{{$sermon['description']}}</td>
            </tr>
            @endForeach
        </tbody>
    </table>
</div>
<div class="row">
    <ul class="pagination">
        <li class="page-item">
            <a href="{{route('pages.sermon.index',[ 'page' => 1])}}" class="page-link">First</a>
        </li>
        <li class="page-item">
            <a href="{{route('pages.sermon.index',[ 'page' => $response['current_page'] - 1])}}" class="page-link">Previous</a>
        </li>
        <li class="page-item">
            <p class="page-link">{{$response['current_page']}}</p>
        </li>
        <li class="page-item">
            <a href="{{route('pages.sermon.index',[ 'page' => $response['current_page'] + 1])}}" class="page-link">Next</a>
        </li>
        <li class="page-item">
            <a href="{{route('pages.sermon.index',[ 'page' => $response['last_page']])}}" class="page-link">Last</a>
        </li>
    </ul>
</div>


@endsection
