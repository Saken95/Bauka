@extends('layouts.app')

@section('content')

    <div class="container">
        @isset($users)
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th scope="col">ФИО</th>
                <th scope="col">Email</th>
                <th scope="col">Дата создание</th>
            </tr>
            </thead>
            <tbody id="main_body">
            @foreach($users as $index => $value )
                <tr>
                    <td>{{++$index}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @endisset
    </div>

@endsection
