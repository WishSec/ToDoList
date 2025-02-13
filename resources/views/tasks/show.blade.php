@extends('layouts.app')

@section('content')
    <h2>Detail Tugas</h2>

    <p><strong>Judul:</strong> {{ $task->name }}</p>
    <p><strong>Deskripsi:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Selesai' : 'Belum Selesai' }}</p>

    <a href="{{ route('tasks.index') }}">Kembali</a>
@endsection
