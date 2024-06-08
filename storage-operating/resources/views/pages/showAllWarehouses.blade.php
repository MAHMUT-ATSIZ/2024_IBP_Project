@extends('layouts.admin_panel_layout')

@section('title', 'Depolar')
@section('title2', 'Depo İşlemleri')
@section('title3', 'Depolar')

@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-10 offset-md-1">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Depolar Listesi</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>İsim</th>
                            <th>Müdür</th>
                            <th>Adres</th>
                            <th>Şehir</th>
                            <th>Telefon</th>
                            <th>E-posta</th>
                            <th>Ücret</th>
                            <th>Kapasite</th>
                            <th>Açıklama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($warehouses->sortBy('name') as $warehouse)
                            <tr>
                                <td>{{ $warehouse->name }}</td>
                                <td>{{ $warehouse->manager }}</td>
                                <td>{{ $warehouse->address }}</td>
                                <td>{{ $warehouse->city }}</td>
                                <td>{{ $warehouse->phone }}</td>
                                <td>{{ $warehouse->email }}</td>
                                <td>{{ $warehouse->price }}</td>
                                <td>{{ $warehouse->capacity }}</td>
                                <td>{{ $warehouse->details }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
