@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Waktu Pengerjaan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>
                                <p class="fw-normal mb-1">{{ $student->id }}</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="ms-3">
                                        <p class="text-muted mb-0">{{$student->name}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="">{{ $student->created_at }}</span>
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