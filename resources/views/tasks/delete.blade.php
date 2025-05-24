@extends('layouts.layout')

@section('content')
<style>
    .container {
        max-width: 600px;
        margin: 50px auto;
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h1 {
        margin-bottom: 30px;
        color: #333;
        font-weight: 700;
    }

    p {
        font-size: 18px;
        color: #555;
        margin-bottom: 40px;
    }

    form {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    button, a {
        padding: 12px 28px;
        font-size: 16px;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        user-select: none;
        min-width: 120px;
    }

    button.btn-delete {
        background-color: #e74c3c; /* merah */
    }

    button.btn-delete:hover {
        background-color: #c0392b;
    }

    a.btn-cancel {
        background-color: #7f8c8d; /* abu */
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    a.btn-cancel:hover {
        background-color: #606b6e;
    }
</style>

<div class="container">
    <h1>Hapus Tugas</h1>
    <p>Apakah Anda yakin ingin menghapus tugas <strong>{{ $task->task }}</strong>?</p>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-delete">Ya, Hapus</button>
        <a href="{{ route('tasks.index') }}" class="btn-cancel">Batal</a>
    </form>
</div>
@endsection
