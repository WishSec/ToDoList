@extends('layouts.app')

@section('content')
    <h2>Tambah Tugas</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="name">Nama Tugas:</label>
        <input type="text" name="name" required><br></br>

        <label for="description">Deskripsi:</label>
        <textarea name="description"></textarea>

        <button type="submit">Submit</button>
        <a href="{{ route('tasks.index') }}">Batal</a>
    </form>
@endsection