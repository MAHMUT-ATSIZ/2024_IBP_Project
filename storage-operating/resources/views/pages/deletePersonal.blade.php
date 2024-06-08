@extends('layouts.admin_panel_layout')

@section('title', 'Personel Sil')
@section('title2', 'Personel İşlemleri')
@section('title3', 'Personel Sil')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-5 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-dark text-white text-center">
                    <h3 class="card-title m-0">Silinecek Personelin E-Posta Adresi</h3>
                </div>
                <form action="{{ route('deletePersonal.post') }}" method="post">
                    @csrf
                    <div class="card-body p-4">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">E-posta:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email adresi giriniz" required>
                        </div>
                    </div>
                    <div class="card-footer bg-light text-end">
                        <button type="submit" class="btn btn-danger">Personeli Sil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
