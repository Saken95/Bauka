@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-briefcase"></i> Серверная</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @isset($object)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th scope="col">Инвентарный номер</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col">В комплекте</th>
                                    <th scope="col">Серийный номер</th>
                                    <th scope="col">Наличие</th>
                                    <th scope="col">Пользователь</th>
                                    <th>
                                        <select name="baza" id="baza">
                                            <option value="0" disabled selected>Выберите</option>
                                            <option value="null">Главная</option>
                                            <option value="2">Склад</option>
                                            <option value="3">Списание</option>
                                        </select>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="main_body">
                                @foreach($object as $index => $value )
                                    <tr>
                                        <td>{{++$index}}</td>
                                        <td>{{$value->inv_number}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->date}}</td>
                                        <td>{{$value->komplekt}}</td>
                                        <td>{{$value->ser_number}}</td>
                                        <td>{{$value->naliche}}</td>
                                        <td>{{$value->user_name}}</td>
                                        <td><input value="{{$value->id}}" type="checkbox"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-success" id="main_save">Сохранить</button>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
