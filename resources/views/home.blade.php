@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#modalBtn">
                Add
            </button>
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalBtn" tabindex="-1" role="dialog"
     aria-labelledby="modalBtnTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('main_create') }}" class="mb-2">
                    <div class="input-group">
                        <input type="text" class="input" name="inv_number" placeholder="Инвентарный номер">
                        <input type="text" class="input" name="name" placeholder="Наименование">
                        <input type="date" class="input" name="date" placeholder="Дата">
                        <input type="text" class="input" name="marka" placeholder="Марка">
                        <input type="text" class="input" name="komplekt" placeholder="В комплекте">
                        <input type="number" class="input" name="kabinet" placeholder="Кабинет">
                        <input type="text" class="input" name="ser_number" placeholder="Серийный номер">
                        <input type="text" class="input" name="naliche" placeholder="Наличие">
                    </div>
                    <input type="submit" class="btn btn-success m-2" value="Save">
                </form>
            </div>
            {{--<div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>--}}
        </div>
    </div>
</div>
@endsection
