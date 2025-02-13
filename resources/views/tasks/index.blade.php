@extends('layouts.app')

@section('content')
    <h2>Daftar Tugas</h2>

    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th><a href="{{ route('tasks.create') }}">Tambah Tugas</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $task->name }}</td>
                <td>
                    <form action="{{ route('tasks.toggle-status', $task->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">
                            {{ $task->is_completed ? 'Tandai Belum Selesai' : 'Tandai Selesai' }}
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}">Detail</a>
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('hapus tugas ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
