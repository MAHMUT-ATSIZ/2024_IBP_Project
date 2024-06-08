<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Depo mu lazım?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
    <div id="message-container">
        @foreach ($errors->all() as $error)
            <div class="message error">{{ $error }}</div>
        @endforeach

        @if (session('error'))
            <div class="message error">{{ session('error') }}</div>
        @endif

        @if (session('success'))
            <div class="message success">{{ session('success') }}</div>
        @endif
    </div>
    <header>
        <div class="banner">İlk kiralamada %20 indirim!</div>
        <nav>
            <div id="logo">
                <img src="{{asset('depo.svg')}}" style="height: 70px;" >
                Mahmut'un <br> Depo Mağazası
            </div>
            <ul class="navigation-menu">
                <li><a href="#">Depo Tipleri</a>
                    <ul class="subnav">
                        <li class="card-med" id="sup-dog">
                            <div class="card-image"><img src="{{asset('item1.png')}}"></div>
                            <a href="#">
                                <span>Nakliyat</span>
                            </a>
                        </li>
                        <li class="card-med" id="sup-cat">
                            <div class="card-image"><img src="{{asset('item3.png')}}"></div>
                            <a href="#">
                                <span>Muhafaza</span>
                            </a>
                        </li>
                        <li class="card-med" id="sup-bird">
                            <div class="card-image"><img src="{{asset('item2.png')}}"></div>
                            <a href="#">
                                <span>Düzenleme</span>
                            </a>
                        </li>
                        <li class="card-med" id="sup-fish">
                            <div class="card-image"><img src="{{asset('item4.png')}}"></div>
                            <a href="#">
                                <span>Uçtan Uca İş</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">Hizmetler</a>
                    <ul class="subnav">
                        <li class="card-med" id="serv-groom">
                            <div class="card-image"><img src="{{asset('item1.png')}}"></div>
                            <a href="#">
                                <span>Taşıma Destek</span></a>
                        </li>
                        <li class="card-med" id="serv-board">
                            <div class="card-image"><img src="{{asset('item3.png')}}"></div>
                            <a href="#">
                                <span>Paketleme &amp; Saklama</span>
                            </a>
                    </ul>
                </li>

                <li style="margin-right: 10px">
                    <a>
                        Hoş Geliniz {{Auth::user()->email}}
                    </a>
                </li>

                <li style="margin-right: 10px">
                    <a href="{{route('usermessages')}}">
                        Mesaj Gönder
                    </a>
                </li>

                <li style="margin-right: 10px">
                    <a href="{{route('usershowAllAnnouncements')}}">
                        Duyurular
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="hero" style="background: var(--brand-02) url('{{asset('ware.png')}}') no-repeat center right;">
        <h1>İhtiyacınıza göre her kapsamda depo hizmeti!</h1>
        <div class="btn-group">
            <button class="btn-filled-dark"><span class="material-symbols-outlined">
                    shopping_cart
                </span><a style="color: white" href="{{route('login')}}">Ürünler</a></button>
            <button class="btn-outline-dark btn-hover-color"><span class="material-symbols-outlined">
                    calendar_month
                </span><a style="color: black" href="{{route('login')}}">Görüşme Planla</a></button>
        </div>

    </section>
    <section>
        <h2>Neler Yapıyoruz?</h2>

        <ul class="shop-pets">
            <li class="card-large card-light" id="sup-dog">
                <div class="card-image"><img src="{{asset('item1.png')}}"></div>
                <ul>
                    Nakliyat
                    <li><a href="#">Devralma &amp; Taşıma</a></li>
                    <li><a href="#">Ulaştırma</a></li>
                    <li><a href="#">Yükle &amp; Boşalt</a></li>
                    <li><a href="#">Sıfır zarar garantisi</a></li>

                    <button class="btn-outline-light">Detaylar<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>

                </ul>


            </li>

            <li class="card-large card-dark" id="sup-cat">
                <div class="card-image"><img src="{{asset('item3.png')}}"></div>
                <ul>Muhafaza
                    <li><a href="#">Saklama &amp; Muhafa Etme</a></li>
                    <li><a href="#">Güvenlik Önlemleri</a></li>
                    <li><a href="#">Hızlı Teslimat &amp; Uygun Fiyat</a></li>
                    <button class="btn-outline-dark">Detaylar<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>

            </li>

            <li class="card-large card-dark" id="sup-bird">
                <div class="card-image"><img src="{{asset('item2.png')}}"> </div>
                <ul>Düzenleme
                    <li><a href="#">Teslim Sonrası Yerleştirme</a></li>
                    <li><a href="#">Forklift Kiralama</a></li>
                    <li><a href="#">Çalışan Kiralama</a></li>
                    <button class="btn-outline-dark">Detaylar<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>

            </li>
            <li class="card-large card-light" id="sup-fish">
                <div class="card-image"><img src="{{asset('item4.png')}}"></div>
                <ul>
                    Uçtan Uca İş
                    <li><a href="#">Fabrika &amp; Mağaza Ağı</a></li>
                    <li><a href="#">İş Kültürlü Çalışanlar</a></li>
                    <li><a href="#">Sürekli Destek</a></li>
                    <button class="btn-outline-light">Detaylar<span class="material-symbols-outlined">
                            arrow_forward
                        </span></button>
                </ul>

            </li>
        </ul>
    </section>

    <section>
        <h2>Bazı Detaylar</h2>

        <ul class="services">
            <li class="card-large card-dark card-wide" id="serv-groom">
                <div class="card-image"><img src="{{asset('item1.png')}}"></div>
                <ul>
                    Taşıma<span class="subtitle">Forklift kiralarken isterseniz şoför de sağlıyoruz.</span>
                    <li><a href="#">Şoför Günlüğü</a><span>$80</span></li>
                    <li><a href="#">Forklift Günlüğü</a><span>$20</span></li>
                    <li><a href="#">Sıfır Hasar Garanti</a><span>$16</span></li>
                </ul>
            </li>
            <li class="card-large card-dark card-wide" id="serv-board">
                <div class="card-image"><img src="{{asset('item3.png')}}"></div>
                <ul>
                    Ürün Muhafaza<span class="subtitle">Yalnızca paketleme ve geçici süreliğine mi ihtiyacınız var?</span>
                    <li><a href="#">Dışarıda Muhafaza</a><span>$80</span></li>
                    <li><a href="#">Kapalı Alanda Muhafaza</a><span>$100</span></li>
                </ul>

            </li>
        </ul>
    </section>

    <section id="locate">
        <div><br>
            <h3 style="font-size: 72px">Zahmet etmeyin! Biz gelelim.</h3><br><br>
            <h2>Yeriniz &amp; Uygun Olduğunuz <S></S>aatler</h2>
            <p>Daha detaylı bilgilendirmeyi ayağınıza getiriyoruz! Üstelik ilk görüşmede anlaşmaya %20'ye varan indirim imkanı!</p>
            <div class="btn-group">
                <button class="btn-filled-dark"><span class="material-symbols-outlined">

                </span>İletişime Geç</button>
            </div>
        </div>
    </section>

    <footer>

        <ul>
            Ürünler
            <li><a href="#">Forklift &amp; Şoför</a></li>
            <li><a href="#">Nakliyat</a></li>
            <li><a href="#">Taşıma</a></li>
        </ul>

        <ul>
            Hizmet
            <li><a href="#">Size Geliyoruz</a></li>
            <li><a href="#">İlk Görüşmede %20 indirim</a></li>
        </ul>

        <ul>
            Ortaklarımız
            <li><a href="#">İlk Siz Olun</a></li>
        </ul>
        <ul>
            Şirketimiz
            <li><a href="#">Konumumuz &amp; Saatlerimiz</a></li>
            <li><a href="#">Hakkımızda</a></li>
        </ul>
    </footer>
    <style>
        .message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 1rem;
            border: 1px solid #f5c6cb;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            transform: translateY(-20px);
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }

        .message.show {
            opacity: 1;
            transform: translateY(0);
        }
        #message-container {
            position: fixed;
            top: 100px;
            left: 60%;
            transform: translateX(-50%);
            z-index: 1000;
            width: 80%;
            max-width: 400px;
        }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                const messages = document.querySelectorAll('.message');
                messages.forEach(message => {
                    message.classList.add('show');
                    setTimeout(() => {
                        message.classList.remove('show');
                    }, 3000);
                });
            });
        </script>
</body>
</html>
