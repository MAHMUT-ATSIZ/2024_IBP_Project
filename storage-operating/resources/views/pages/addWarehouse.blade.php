@extends('layouts.admin_panel_layout')

@section('title', 'Depo Ekle')
@section('title2', 'Depo İşlemleri')
@section('title3', 'Depo Ekle')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-secondary shadow-lg">
                <div class="card-header bg-secondary text-white d-flex align-items-center">
                    <i class="fas fa-warehouse me-2"></i>&nbsp; &nbsp;
                    <h3 class="card-title mb-0">Depo Bilgileri</h3>
                </div>
                <form action="{{ route('addWarehouse.post') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Depo İsmi:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="manager" class="form-label">Müdür:</label>
                            <input type="text" name="manager" id="manager" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Adresi:</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="city" class="form-label">Şehir:</label>
                            <select name="city" id="city" class="form-select">
                                <option value="Adana">Adana</option>
                                <option value="Adıyaman">Adıyaman</option>
                                <option value="Afyonkarahisar">Afyonkarahisar</option>
                                <option value="Ağrı">Ağrı</option>
                                <option value="Amasya">Amasya</option>
                                <option value="Ankara">Ankara</option>
                                <option value="Antalya">Antalya</option>
                                <option value="Artvin">Artvin</option>
                                <option value="Aydın">Aydın</option>
                                <option value="Balıkesir">Balıkesir</option>
                                <option value="Bilecik">Bilecik</option>
                                <option value="Bingöl">Bingöl</option>
                                <option value="Bitlis">Bitlis</option>
                                <option value="Bolu">Bolu</option>
                                <option value="Burdur">Burdur</option>
                                <option value="Bursa">Bursa</option>
                                <option value="Çanakkale">Çanakkale</option>
                                <option value="Çankırı">Çankırı</option>
                                <option value="Çorum">Çorum</option>
                                <option value="Denizli">Denizli</option>
                                <option value="Diyarbakır">Diyarbakır</option>
                                <option value="Edirne">Edirne</option>
                                <option value="Elazığ">Elazığ</option>
                                <option value="Erzincan">Erzincan</option>
                                <option value="Erzurum">Erzurum</option>
                                <option value="Eskişehir">Eskişehir</option>
                                <option value="Gaziantep">Gaziantep</option>
                                <option value="Giresun">Giresun</option>
                                <option value="Gümüşhane">Gümüşhane</option>
                                <option value="Hakkari">Hakkari</option>
                                <option value="Hatay">Hatay</option>
                                <option value="Isparta">Isparta</option>
                                <option value="Mersin">Mersin</option>
                                <option value="İstanbul">İstanbul</option>
                                <option value="İzmir">İzmir</option>
                                <option value="Kars">Kars</option>
                                <option value="Kastamonu">Kastamonu</option>
                                <option value="Kayseri">Kayseri</option>
                                <option value="Kırklareli">Kırklareli</option>
                                <option value="Kırşehir">Kırşehir</option>
                                <option value="Kocaeli">Kocaeli</option>
                                <option value="Konya">Konya</option>
                                <option value="Kütahya">Kütahya</option>
                                <option value="Malatya">Malatya</option>
                                <option value="Manisa">Manisa</option>
                                <option value="Kahramanmaraş">Kahramanmaraş</option>
                                <option value="Mardin">Mardin</option>
                                <option value="Muğla">Muğla</option>
                                <option value="Muş">Muş</option>
                                <option value="Nevşehir">Nevşehir</option>
                                <option value="Niğde">Niğde</option>
                                <option value="Ordu">Ordu</option>
                                <option value="Rize">Rize</option>
                                <option value="Sakarya">Sakarya</option>
                                <option value="Samsun">Samsun</option>
                                <option value="Siirt">Siirt</option>
                                <option value="Sinop">Sinop</option>
                                <option value="Sivas">Sivas</option>
                                <option value="Tekirdağ">Tekirdağ</option>
                                <option value="Tokat">Tokat</option>
                                <option value="Trabzon">Trabzon</option>
                                <option value="Tunceli">Tunceli</option>
                                <option value="Şanlıurfa">Şanlıurfa</option>
                                <option value="Uşak">Uşak</option>
                                <option value="Van">Van</option>
                                <option value="Yozgat">Yozgat</option>
                                <option value="Zonguldak">Zonguldak</option>
                                <option value="Aksaray">Aksaray</option>
                                <option value="Bayburt">Bayburt</option>
                                <option value="Karaman">Karaman</option>
                                <option value="Kırıkkale">Kırıkkale</option>
                                <option value="Batman">Batman</option>
                                <option value="Şırnak">Şırnak</option>
                                <option value="Bartın">Bartın</option>
                                <option value="Ardahan">Ardahan</option>
                                <option value="Iğdır">Iğdır</option>
                                <option value="Yalova">Yalova</option>
                                <option value="Karabük">Karabük</option>
                                <option value="Kilis">Kilis</option>
                                <option value="Osmaniye">Osmaniye</option>
                                <option value="Düzce">Düzce</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Telefon Numarası:</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">E-Posta Adresi:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Ücret:</label>
                            <input type="number" step="0.01" name="price" id="price" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="capacity" class="form-label">Kapasite:</label>
                            <input type="number" name="capacity" id="capacity" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="details" class="form-label">Açıklama:</label>
                            <textarea name="details" id="details" class="form-control" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-plus-circle me-2"></i>&nbsp; &nbsp; Depoyu Oluştur
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

    .form-control, .form-select {
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
        margin-bottom: 1rem !important;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-4MJnTP4kBsBbU/0I3pr4FjxaZHMsCg6d9s/sZl9c4MEVo6AE1g2psk/nrc+50KXyl98leWS1du7kOpU7b1xTXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection
