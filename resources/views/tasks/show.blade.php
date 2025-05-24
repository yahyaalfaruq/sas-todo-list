@extends('layouts.layout')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 650px;
        margin: 60px auto;
        padding: 30px 40px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 28px;
        font-weight: bold;
        color: #2c3e50;
        margin-bottom: 25px;
        text-align: center;
    }

    .card {
        padding: 25px;
        border-radius: 10px;
        background-color: #ecf0f1;
        color: #2c3e50;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
    }

    .card p {
        font-size: 16px;
        margin-bottom: 12px;
    }

    .back-button {
        display: inline-block;
        margin-top: 20px;
        background-color: #3498db;
        color: white;
        padding: 10px 18px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #2980b9;
    }
</style>

<div class="container">
    <h1>Detail Tugas</h1>
    <div class="card">
        <p><strong>Nama Tugas:</strong> {{ $task->task }}</p>
        <p><strong>User ID:</strong> {{ $task->user_id }}</p>
        <p><strong>Status:</strong> {{ $task->is_completed ? 'Selesai' : 'Belum Selesai' }}</p>
    </div>
    <a href="{{ route('tasks.index') }}" class="back-button">← Kembali ke Daftar</a>
</div>
@endsection
