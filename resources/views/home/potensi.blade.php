@extends('layouts.frontend.app', [
    'title' => 'Potensi'
])

@section('content')
<section class="pt-5 pb-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-primary font-weight-bold">🌾Potensi Desa Sebelimbingan🌾</h2>
            <p class="text-muted">Berikut beberapa potensi unggulan yang menjadi kekuatan utama desa kami.</p>
        </div>

        <div class="row">
            <!-- Potensi 1 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card card-blue-shadow h-100 border-0">
                    <img src="{{ asset('img/icons') }}/kratom.jpg" class="card-img-top" alt="Potensi Perkebunan">
                    <div class="card-body">
                        <h5 class="card-title text-black text-center">Tanaman Kratom</h5>
                        <p class="card-text text-muted">Tanaman kratom merupakan salah satu komoditas unggulan Desa Sebelimbingan yang memiliki nilai ekonomi tinggi. Daunnya sering dimanfaatkan untuk bahan herbal dan memiliki potensi pasar baik di dalam maupun luar negeri. Pengelolaan yang berkelanjutan dapat menjadi sumber pendapatan utama bagi petani setempat.</p>
                    </div>
                </div>
            </div>

            <!-- Potensi 2 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card card-blue-shadow h-100 border-0">
                    <img src="{{ asset('img/icons') }}/hutan.jpg" class="card-img-top" alt="Potensi Perikanan">
                    <div class="card-body">
                        <h5 class="card-title text-black">Kawasan Hutan Desa </h5>
                        <p class="card-text text-muted">Desa Sebelimbingan memiliki kawasan hutan yang cukup luas dan masih terjaga kelestariannya. Hutan ini menjadi habitat berbagai flora dan fauna lokal, berfungsi sebagai penyangga ekosistem, dan menyimpan potensi sumber daya alam yang dapat dimanfaatkan secara lestari, termasuk untuk ekowisata</p>
                    </div>
                </div>
            </div>

            <!-- Potensi 3 -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card card-blue-shadow h-100 border-0">
                    <img src="{{ asset('img/icons') }}/sawah.jpg" class="card-img-top" alt="Potensi Pariwisata">
                    <div class="card-body">
                        <h5 class="card-title text-black">Sawah</h5>
                        <p class="card-text text-muted">Lahan persawahan di Desa Sebelimbingan menjadi salah satu sumber pangan utama bagi masyarakat. Padi yang dihasilkan tidak hanya untuk kebutuhan lokal tetapi juga dapat dipasarkan ke wilayah sekitar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card card-blue-shadow h-100 border-0">
                    <img src="{{ asset('img/icons') }}/sapi.jpg" class="card-img-top" alt="Potensi Pariwisata">
                    <div class="card-body">
                        <h5 class="card-title text-black">Peternakan Sapi</h5>
                        <p class="card-text text-muted">Peternakan sapi menjadi salah satu mata pencaharian warga, dengan produk utama berupa daging dan susu segar. Selain memberikan manfaat ekonomi, kegiatan peternakan juga mendukung kebutuhan pangan protein hewani di desa dan daerah sekitar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card card-blue-shadow h-100 border-0">
                    <img src="{{ asset('img/icons') }}/ikan.jpg" class="card-img-top" alt="Potensi Pariwisata">
                    <div class="card-body">
                        <h5 class="card-title text-black">Ikan segar</h5>
                        <p class="card-text text-muted">Sungai dan kolam-kolam budidaya di desa menghasilkan ikan air tawar. Hasil perikanan ini menjadi sumber protein penting bagi masyarakat dan juga dipasarkan ke luar daerah, memberikan kontribusi terhadap perekonomian desa.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card card-blue-shadow h-100 border-0">
                    <img src="{{ asset('img/icons') }}/walet.jpg" class="card-img-top" alt="Potensi Pariwisata">
                    <div class="card-body">
                        <h5 class="card-title text-black">Sarang Burung Walet</h5>
                        <p class="card-text text-muted">Desa Sebelimbingan memiliki potensi produksi sarang burung walet yang bernilai jual tinggi di pasar internasional. Usaha ini menjadi peluang ekonomi yang menjanjikan bagi warga, dengan pengelolaan yang tepat dapat memberikan penghasilan signifikan.</p>
                    </div>
                </div>
            </div>

            <!-- Potensi lainnya bisa ditambah di sini -->
        </div>
    </div>
</section>
<!-- Section Video Potensi Desa -->
<section class="pt-5 pb-5 bg-white">
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="text-primary font-weight-bold">Video Profil Potensi Desa</h3>
            <p class="text-muted">Tonton video berikut untuk melihat langsung potensi unggulan Desa Sebelimbingan.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="embed-responsive embed-responsive-16by9 shadow rounded overflow-hidden">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fyMYlMtw9HY?si=EhaFE0AoXCZ2MK77" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* Shadow biru untuk card */
    .card-blue-shadow {
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2) !important;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .card-blue-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3) !important;
    }
</style>
@endsection
