@extends('layouts.admin_panel_layout')

@section('title', 'Duyuru Güncelle')
@section('title2', 'Duyuru İşlemleri')
@section('title3', 'Duyuru Güncelle')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-10 offset-md-1">
        <div class="card card-primary">
            <div style="background-color: gray;" class="card-header">
                <h3 class="card-title">Duyurular Listesi</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>İçerik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements->sortBy('role') as $announcement)
                            <tr>
                                <td>{{ $announcement->tittle }}</td>
                                <td>{{ $announcement->description }}</td>
                                <td>{{ $announcement->content }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 0.75rem;
    }

    .card-header {
        border-top-left-radius: 0.75rem;
        border-top-right-radius: 0.75rem;
        display: flex;
        align-items: center;
    }

    .form-control {
        border-radius: 0.5rem;
        padding: 0.75rem;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
    }

    .form-label {
        font-weight: bold;
    }

    .card-body {
        background-color: #f8f9fa;
    }

    .card-footer {
        background-color: #f1f1f1;
    }

    .mb-3 {
        margin-bottom:
    }
</style>
@endsection
