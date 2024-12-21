@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Atur Penjadwalan Pakan</h1>
    <!-- Konten lainnya -->
</div>
@endsection

    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="time" class="form-label">Waktu</label>
            <input type="time" name="time" id="time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="feed_quantity" class="form-label">Kuantitas Pakan (gram)</label>
            <input type="number" name="feed_quantity" id="feed_quantity" class="form-control" required min="10" max="500">
        </div>
        <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
    </form>

    <h2 class="mt-5">Jadwal Anda</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Waktu</th>
                <th>Kuantitas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
            <tr>
                <td>{{ $schedule->time }}</td>
                <td>{{ $schedule->feed_quantity }} gram</td>
                <td>{{ $schedule->is_active ? 'Aktif' : 'Nonaktif' }}</td>
                <td>
                    <form action="{{ route('schedules.destroy', $schedule) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
