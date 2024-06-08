@extends('layouts.admin_panel_layout')

@section('title', 'Depo Sil')
@section('title2', 'Depo İşlemleri')
@section('title3', 'Depo Sil')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-dark shadow-lg">
                <div class="card-header bg-dark text-white d-flex align-items-center">
                    <i class="fas fa-warehouse me-2"></i>&nbsp; &nbsp;
                    <h3 class="card-title mb-0">Silinecek Deponun İsmi</h3>
                </div>
                <form action="{{ route('deleteWarehouse.post') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="form-label">Depo İsmi:</label>
                            <input name="name" id="name" class="form-control" placeholder="Depo ismini giriniz" required>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt me-2"></i>&nbsp; &nbsp; Depoyu Sil
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Add your CSS styles below -->
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

    .btn-danger {
        background-color: #ff4d4d;
        border-color: #ff4d4d;
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
</style>

<!-- Font Awesome for icons (optional, if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-4MJnTP4kBsBbU/0I3pr4FjxaZHMsCg6d9s/sZl9c4MEVo6AE1g2psk/nrc+50KXyl98leWS1du7kOpU7b1xTXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</style>
@endsection
