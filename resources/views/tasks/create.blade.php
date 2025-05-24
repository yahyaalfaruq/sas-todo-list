@extends('layouts.layout')

@section('content')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: 700;
        }

        label {
            font-weight: 600;
            color: #34495e;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #bdc3c7;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 25px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            user-select: none;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.15);
            transition: background-color 0.3s ease;
        }

        .btn-submit {
            background-color: #3498db;
            color: white;
            margin-right: 10px;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

        .btn-cancel {
            background-color: #7f8c8d;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #636e72;
        }

        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
    </style>

    <div class="container">
        <h1>Tambah Tugas</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="task">Nama Tugas</label>
            <input type="text" name="task" id="task" required>

            <div class="button-group">
                <button type="submit" class="btn btn-submit">Simpan</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-cancel">Kembali</a>
            </div>
        </form>
    </div>
@endsection
