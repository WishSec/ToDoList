@extends('layouts.app')

@section('content')
    <h2>Edit Tugas</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nama Tugas:</label>
        <input type="text" name="name" value="{{ $task->name }}" required><br>

        <label for="description">Deskripsi:</label><br>
        <textarea name="description">{{ $task->description }}</textarea><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('tasks.index') }}">Batal</a>
    </form>
@endsection
