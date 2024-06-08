@extends('layouts.admin_panel_layout')

@section('title', 'Tüm Personeller')
@section('title2', 'Personel İşlemleri')
@section('title3', 'Tüm Personeller')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-8 col-md-10">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-dark text-white text-center">
                    <h3 class="card-title m-0">Kullanıcı Listesi</h3>
                </div>
                <div class="card-body table-responsive p-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rol</th>
                                <th>E-posta</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personals->sortBy('role') as $user)
                                <tr>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
