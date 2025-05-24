@extends('layouts.layout')

@section('content')
    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            background: #fff;
            padding: 40px 50px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }

        .btn {
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
        }

        .list-group-item {
            background: #ecf0f1;
            margin-bottom: 14px;
            padding: 18px 24px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .text-decoration-line-through {
            text-decoration: line-through;
            color: #95a5a6;
        }

        .d-flex {
            display: flex;
            gap: 10px;
            flex-wrap: nowrap;
            justify-content: center;
        }


        .form-select {
            border-radius: 8px;
            font-size: 14px;
        }

        .top-right {
            position: absolute;
            top: 20px;
            right: 30px;
            z-index: 999;
        }
    </style>

    <div class="container">
        <h2>Semua Tugas</h2>

        <div class="top-right">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        <div class="d-flex mb-3" style="gap: 10px; justify-content: center;">
            <div>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Menu Tugas
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('tasks.index') }}">Lihat Semua Tugas</a></li>
                        <li><a class="dropdown-item" href="{{ route('tasks.done') }}">Done</a></li>
                        <li><a class="dropdown-item" href="{{ route('tasks.pending') }}">Pending</a></li>
                    </ul>
                </div>
            </div>

            <div>
                <a href="{{ route('tasks.create') }}" class="btn btn-success">Tambah Tugas</a>
            </div>
        </div>


        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item">
                    <span class="{{ $task->is_completed ? 'text-decoration-line-through' : '' }}">
                        {{ $task->task }}
                    </span>
                    <div class="d-flex">
                        {{-- Ganti status --}}
                        <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="is_completed" class="form-select" onchange="this.form.submit()">
                                <option value="0" {{ !$task->is_completed ? 'selected' : '' }}>Pending</option>
                                <option value="1" {{ $task->is_completed ? 'selected' : '' }}>Done</option>
                            </select>
                        </form>

                        {{-- Detail --}}
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-secondary">Detail</a>

                        {{-- Edit --}}
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>

                        {{-- Delete --}}
                        <a href="{{ route('tasks.delete', $task->id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
