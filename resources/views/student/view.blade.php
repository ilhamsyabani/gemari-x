@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Detail Tugas Siswa') }}</div>
                <div class="card-body">
                    <h3>Nama Siswa : {{$student->name}}</h3>
                    <p>Tanggal Pengerjaan : {{ $student->created_at }}</p>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">{{ __('Tugas pertama') }}</div>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Nilai</th>
                            <th>Waktu Pengerjaan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($student->kuis1 as $kuis1) 
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">{{ $kuis1->id }}</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="text-muted mb-0">{{ $kuis1->nilai}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="">{{ $kuis1->created_at }}</span>
                            </td>
                            <td>
                                <a href="{{ route('student.view', ['id' => $student->id]) }}" type="button" class="btn btn-link btn-sm btn-rounded">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="card mt-4">
                <div class="card-header">{{ __('Tugas kedua') }}</div>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Nilai</th>
                            <th>Waktu Pengerjaan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($student->kuis2 as $kuis2) 
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">{{ $kuis2->id }}</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="text-muted mb-0">{{ $kuis2->nilai}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="">{{ $kuis2->created_at }}</span>
                            </td>
                            <td>
                                <a href="{{ route('student.view', ['id' => $student->id]) }}" type="button" class="btn btn-link btn-sm btn-rounded">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="card mt-4">
                <div class="card-header">{{ __('Tugas ketiga') }}</div>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>No Soal</th>
                            <th>Kalimat</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($student->kuis3 as $kuis3) 
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">{{ $kuis3->id }}</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="text-muted mb-0">{{ $kuis3->no_soal}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="">{{ $kuis3->kalimat }}</span>
                            </td>
                            <td>
                                <a href="{{ route('student.view', ['id' => $student->id]) }}" type="button" class="btn btn-link btn-sm btn-rounded">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="card mt-4">
                <div class="card-header">{{ __('Tugas keempat') }}</div>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Kalimat</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($student->kuis4 as $kuis4 ) 
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">{{ $kuis4->id }}</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="text-muted mb-0">{{ $kuis4->kalimat }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('student.view', ['id' => $student->id]) }}" type="button" class="btn btn-link btn-sm btn-rounded">
                                    Details
                                </a>
                            </td>
                        </tr>
                    @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection