@extends('layouts.admin_panel_layout')

@section('title', 'Personel Güncelle')
@section('title2', 'Personel İşlemleri')
@section('title3', 'Personel Güncelle')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="col-lg-5 col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-dark text-white text-center">
                <h3 class="card-title">Personel Bilgilerini Güncelle</h3>
            </div>
            <form action="{{ route('updatePersonal.post') }}" method="post">
                @csrf
                <div class="card-body p-4">
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">E-posta:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email adresi giriniz" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Şifre:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Şifre giriniz" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="role" class="form-label">Rol:</label>
                        <select name="role" id="role" class="form-select">
                            <option value="kullanici">Personel</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer bg-light text-end">
                    <button style="background-color: gray" type="submit" class="btn btn-primary">Güncelle</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
