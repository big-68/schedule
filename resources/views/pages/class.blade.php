@extends('templates.main')

@section('content')
    <div class="class">
        <div class="container">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-createClass-tab" data-bs-toggle="pill" data-bs-target="#pills-createClass" type="button" role="tab" aria-controls="pills-createClass" aria-selected="true">Создать новый класс</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-student-tab" data-bs-toggle="pill" data-bs-target="#pills-student" type="button" role="tab" aria-controls="pills-student" aria-selected="false">Добавить ученика в класс</button>
                </li> --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-teacher-tab" data-bs-toggle="pill" data-bs-target="#pills-teacher" type="button" role="tab" aria-controls="pills-teacher" aria-selected="false">Классы</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-createClass" role="tabpanel" aria-labelledby="pills-createClass-tab" tabindex="0">
                    <div class="alert alert-info register-alert" role="alert">
                        Создание нового класса
                    </div>
                    <form action="{{ route('add.class') }}" method="POST">
                        @csrf
                        <div class=" mb-3">
                            <label for="class_code" class="form-label">Код класса</label>
                            <input type="text" class="form-control @error('class_code') is-invalid @enderror" name="class_code" placeholder="1-а" id="class_code">
                            @error('class_code')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" mb-3">
                            <label for="max_count" class="form-label">Максимальное количество человек в классе</label>
                            <input type="number" class="form-control @error('max_count') is-invalid @enderror" name="max_count" placeholder="25" id="max_count">
                            @error('max_count')
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Создать новый класс</button>
                    </form>
                </div>
                {{-- <div class="tab-pane fade" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab" tabindex="0">
                    <form action="{{ route('add.student') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="number" class="form-label">Ученик</label>
                            <select class="form-select mb-3" name="class_id"  aria-label="Default select example">
                                <option selected>Выбрать ученика</option>
                                @foreach ($users as $user)
                                    @if ($user->group_id === 2)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <input type="hidden" value="{{ $user->group_id }}" name="group_id">
                            <input type="hidden" value="{{ $user->id }}" name="user_id">
                            <label for="number" class="form-label">Класс</label>
                            <select class="form-select mb-3" name="class_id"  aria-label="Default select example">
                                <option selected>Выбрать класс</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->class_code }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Продолжить</button>
                    </form>
                </div> --}}
                <div class="tab-pane fade" id="pills-teacher" role="tabpanel" aria-labelledby="pills-teacher-tab" tabindex="1">
                    <table class="table table-bordered border-primary">
                        <tbody>
                            @foreach ($classes as $class)
                                <tr>
                                    {{-- <th scope="row">{{ $class->class_code }}</th> --}}
                                    <form action="{{ route('update.class', ['class' => $class->id]) }}" method="POST">
                                        @csrf
                                        <td>
                                            <input class="update-class__input" type="text" name="class_code" value="{{ $class->class_code }}">
                                        </td>
                                        <td>
                                            <input class="update-class__input" type="text" name="max_count" value="{{ $class->max_count }}">
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-info">Редактировать</button>
                                        </td>
                                    </form>
                                    <td>
                                        <form action="{{ route('destroy.class', ['class' => $class->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
