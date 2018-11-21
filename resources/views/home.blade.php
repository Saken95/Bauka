@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if($form)
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalBtn">
                        <i class="fas fa-plus"></i> Добавить
                    </button>
                @endif
                <div class="card">
                    <div class="card-header">Главная</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @isset($object)
                            <table class="table table-hover" id="main">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th scope="col">Инвентарный номер</th>
                                    <th scope="col">Наименование</th>
                                    <th scope="col">Дата</th>
                                    <th scope="col">В комплекте</th>
                                    <th scope="col">Кабинет</th>
                                    <th scope="col">Серийный номер</th>
                                    <th scope="col">Наличие</th>
                                    <th scope="col">Пользователь</th>
                                    @if($form)
                                        <th>
                                            <select name="baza" id="baza">
                                                <option value="0" disabled selected>Выберите</option>
                                                <option value="1">Серверная</option>
                                                <option value="2">Склад</option>
                                                <option value="3">Списание</option>
                                            </select>
                                        </th>
                                    @endif
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
                                        <td>{{$value->kabinet}}</td>
                                        <td>{{$value->ser_number}}</td>
                                        <td>{{$value->naliche}}</td>
                                        <td>{{$value->user_name}}</td>
                                        @if($form)
                                            <td><input value="{{$value->id}}" type="checkbox" id="delete"></td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @if($form)
                                <button class="btn btn-success" id="main_save">Сохранить</button>
                                <button class="btn btn-success" id="main_delete">Удалить</button>
                            @endif
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($form)
        <!-- Modal -->
        <div class="modal fade" id="modalBtn" tabindex="-1" role="dialog"
             aria-labelledby="modalBtnTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Добавление данных</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('main_create') }}" method="post" class="mb-2">
                            {{csrf_field()}}
                            <div class="input-group">
                                <input type="text" class="input" name="inv_number" id="inv_number" placeholder="Инвентарный номер">
                                <input type="text" class="input" name="name" id="name" placeholder="Наименование" required>
                                <input type="date" class="input" name="date" id="date" placeholder="Дата">
                                <input type="text" class="input" name="komplekt" id="komplekt" placeholder="В комплекте">
                                <input type="number" class="input" name="kabinet" id="kabinet" placeholder="Кабинет">
                                <input type="text" class="input" name="ser_number" id="ser_number" placeholder="Серийный номер">
                                <select name="naliche" id="naliche" class="input" >
                                    <option disabled selected>Наличие</option>
                                    <option value="Да">Да</option>
                                    <option value="Нет">Нет</option>
                                </select>
                                <input type="text" class="input" name="user_name" id="user_name" placeholder="Пользователь">
                            </div>
                            <input type="submit" class="btn btn-success m-2" value="Сохранить">
                        </form>
                    </div>
                    {{--<div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>--}}
                </div>
            </div>
        </div>
    @endif
@endsection
