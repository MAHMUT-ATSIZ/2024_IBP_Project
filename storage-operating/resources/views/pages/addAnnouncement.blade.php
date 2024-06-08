@extends('layouts.admin_panel_layout')

@section('title', 'Duyuru Ekle')
@section('title2', 'Duyuru İşlemleri')
@section('title3', 'Duyuru Ekle ')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary shadow-lg">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="fas fa-bullhorn me-2"></i>
                    <h3 class="card-title mb-0">Duyuru Bilgileri</h3>
                </div>
                <form action="{{ route('addAnnouncement.post') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="tittle" class="form-label">Duyuru Başlığı:</label>
                            <input type="text" name="tittle" id="tittle" class="form-control" placeholder="Başlık giriniz" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Açıklama (Opsiyonel):</label>
                            <textarea name="description" id="description" class="form-control" rows="3" placeholder="Açıklama giriniz"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Duyuru İçeriği:</label>
                            <textarea name="content" id="content" class="form-control" rows="5" placeholder="İçerik giriniz" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-plus-circle me-2"></i>Duyuru Oluştur
                        </button>
                    </div>
                </form>
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
