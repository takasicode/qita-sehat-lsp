@extends('layouts.dokter')

@section('content')
    <!-- Page Title -->
    <div class="pagetitle">
        <h1>Edit Jadwal Periksa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dokter.index') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('dokter.jadwal-periksa.index') }}">Jadwal Periksa</a>
                </li>
                <li class="breadcrumb-item active">Edit Jadwal Periksa</li>
            </ol>
        </nav>
    </div>

    <section class="content">
        <div class="row">
            <!-- Columns -->
            <div class="col-lg-12">
                <div class="card">
                    <form role="form" method="post" action="{{ route('dokter.jadwal-periksa.update', $jadwal->id) }}"
                        class="container p-4">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="hari">Hari Jadwal Periksa</label>
                            <select name="hari" id="hari" class="form-select w-full"
                                aria-label="Hari Jadwal Periksa" required disabled>
                                <option value="{{ $jadwal->hari }}">{{ $jadwal->hari }}</option>
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jum'at</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <label>Jam Mulai Periksa</label>
                                <input value="{{ $jadwal->jam_mulai }}" name="jam_mulai" type="time" class="form-control"
                                    disabled />
                            </div>
                            <div class="col-lg-6">
                                <label>Jam Selesai Periksa</label>
                                <input value="{{ $jadwal->jam_selesai }}" type="time" name="jam_selesai"
                                    class="form-control" disabled />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="aktif">Status</label>
                            <select name="aktif" id="aktif" class="form-select w-full"
                                aria-label="Status Jadwal Periksa" required>
                                @if ($jadwal->aktif == 'Y')
                                    <option value="Y" selected>Aktif</option>
                                    <option value="T">Tidak Aktif</option>
                                @else
                                    <option value="Y">Aktif</option>
                                    <option value="T" selected>Tidak Aktif</option>
                                @endif
                            </select>
                        </div>
                        <div class="d-flex flex-md-row flex-column gap-2">
                            <button type="submit" class="btn btn-success" title="Simpan Data">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
