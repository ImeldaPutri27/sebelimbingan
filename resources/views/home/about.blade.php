@extends('layouts.frontend.app', ['title' => 'Profil Desa'])

@section('content')
<div class="regular-page-area section-padding-100 bg-light">
    <div class="container">
       <!-- Visi dan Misi -->
        <section class="mb-5">
            <h3 class="text-center text-primary font-weight-bold mb-4">
                Visi dan Misi
            </h3>

            <div class="bg-white p-4 rounded card-blue-shadow border-start border-4 border-success">
                <h5 class="text-center text-black">🌟 Visi 🌟</h5>
                <p class="text-center mt-3 px-3">
                    "Visi Desa Sebelimbingan berisikan harapan akan perubahan kondisi dari saat ini untuk perubahan di masa yang akan datang..."
                </p>
            </div>

            <h5 class="mt-5 text-center text-dark fst-italic fw-bold">
                🌾 RAKAT ETAM HEBAT <br>“Menuju Masyarakat Sebelimbingan yang Sejahtera, Adil, Makmur, dan Religius” 🌾
            </h5>

            <div class="bg-white p-4 rounded card-blue-shadow mt-4 border-end border-4 border-warning">
                <h5 class="text-center text-black mb-4 mt-3">🎯 Misi 🎯</h5>
                <ul class="list-unstyled " style="line-height: 2;">
                    <li>🟢 Meningkatkan kualitas SDM yang beriman, bertaqwa, dan mandiri.</li>
                    <li>🟢 Menyelenggarakan pembangunan desa secara partisipatif dan akuntabel.</li>
                    <li>🟢 Mengembangkan kerja sama dengan instansi, swasta, dan pihak ketiga.</li>
                    <li>🟢 Meningkatkan kapasitas SDM dan aparatur desa.</li>
                    <li>🟢 Menumbuhkan kembali semangat gotong royong masyarakat.</li>
                    <li>🟢 Mengembangkan ekonomi kreatif di sektor wisata, perikanan, keterampilan, dan peternakan.</li>
                </ul>
            </div>
        </section>



        <!-- Struktur Pemerintahan -->
        <section class="mb-5">
            <h3 class="text-center text-primary font-weight-bold mb-4">Struktur Pemerintahan Desa Sebelimbingan</h3>
            <div class="bg-white p-4 rounded card-blue-shadow">
                <p class="text-center">Struktur lengkap perangkat desa yang menjalankan roda pemerintahan:</p>

                <div class="d-flex flex-column align-items-center">
                    <!-- BPD -->
                    <div class="bg-success text-white py-2 px-4 rounded shadow text-center w-50 mb-3">
                        <strong>BPD</strong>
                    </div>

                    <!-- Kepala Desa -->
                    <div class="bg-primary text-white py-2 px-4 rounded shadow text-center w-50 mb-3">
                        <strong>Kepala Desa:</strong><br> 
                        Sauqani
                    </div>

                    <!-- Sekretaris Desa -->
                    <div class="bg-success text-white py-2 px-4 rounded shadow text-center w-50 mb-4">
                        <strong>Sekretaris Desa:</strong><br> 
                        Abraham Sonaya
                    </div>

                    <!-- KASI Section -->
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-4 mb-3">
                                <div class="bg-warning py-3 px-2 rounded shadow">
                                    <strong>Kasi Pemerintahan</strong><br>
                                    <small>Humaini<br>Rahmat<br>Yusran</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="bg-warning py-3 px-2 rounded shadow">
                                    <strong>Kasi Kesra</strong><br>
                                    <small>M. Panji A<br>Sholihin<br>M. Taufik</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="bg-warning py-3 px-2 rounded shadow">
                                    <strong>Kasi Pelayanan</strong><br>
                                    <small>M. Dodi<br>Ali Rahman S<br>M. Irfan</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="bg-warning py-3 px-2 rounded shadow">
                                    <strong>Kaur Keuangan</strong><br>
                                    <small>Anwari Gunawan<br>Kharun Nisa<br>Yeti Andriyani</small>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="bg-warning py-3 px-2 rounded shadow">
                                    <strong>Kaur Tata Usaha dan Umum</strong><br>
                                    <small>Amiruddin.A<br>Aminuddin</small>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Ketua RT Section -->
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-2 mb-3">
                                <div class="bg-danger text-white py-3 rounded shadow-sm">
                                    Ketua RT 1<br>
                                    <small>Sarifuddin</small>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="bg-danger text-white py-3 rounded shadow-sm">
                                    Ketua RT 2<br>
                                    <small>Jamsi</small>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="bg-danger text-white py-3 rounded shadow-sm">
                                    Ketua RT 3<br>
                                    <small>Norlina</small>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="bg-danger text-white py-3 rounded shadow-sm">
                                    Ketua RT 4<br>
                                    <small>Ahmadi</small>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <div class="bg-danger text-white py-3 rounded shadow-sm">
                                    Ketua RT 5<br>
                                    <small>Basri</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Sejarah Desa -->
       <section class="mb-5">
    <h3 class="text-center text-primary font-weight-bold mb-4" 
        style="text-shadow: 1px 1px 3px rgba(0, 102, 255, 0.4);">
        Sejarah Desa Sebelimbingan
    </h3>
    <div class="bg-white p-4 rounded card-blue-shadow" 
         style="border-left: 6px solid #0066ff; box-shadow: 0 4px 12px rgba(0, 102, 255, 0.1);">
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Dahulu, wilayah <strong>Sebelimbingan</strong> hanyalah hutan di bawah pemerintahan Desa Muhuran. 
            Awalnya, di daerah <em>Sebatu</em> yang berpenduduk kurang dari 5 kepala keluarga, 
            masyarakat tinggal di dataran rendah yang sering terendam banjir.
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Melihat kondisi ini, <span style="color:#0066ff; font-weight:600;">Sahamin</span>, 
            cucu tokoh Desa Muhuran bernama Tuka (Suta Kanan), memimpin warga mencari tempat yang lebih aman. 
            Setelah musyawarah, dipilihlah Sebelimbingan sebagai lokasi baru. 
            Sahamin diangkat sebagai Kepala Kampung sejak <strong>1947</strong> dan memimpin pembangunan 
            termasuk pendirian Masjid <em>As-Sadar</em> (kini <em>Baiturrahman</em>).
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Tahun <strong>1957</strong>, kepemimpinan dilanjutkan oleh <strong>Amon</strong> hingga 1962. 
            Pada masa ini, warga mulai menetap dan mengembangkan pertanian.
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Dari <strong>1962–1987</strong>, <strong>Dayon</strong> memimpin bersama lima pengurus kampung. 
            Mereka berhasil menyatukan warga di Segerebok, Teluk Usar, dan Teluk Semalik, 
            serta membangun SD pertama di Sebelimbingan. 
            Desa juga dibagi menjadi dua RT (V dan VI) di bawah Desa Muhuran.
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Tahun <strong>1987–1993</strong>, kepemimpinan dipegang oleh <strong>M. Arim</strong>, 
            kemudian <strong>Hasyim</strong> (1993–2000) yang membawa program 
            <em>Padat Karya CARE</em> untuk pembangunan infrastruktur.
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Pada <strong>2000–2004</strong>, <strong>Kasri</strong> memimpin sebagai Kepala Dusun. 
            Karena pelayanan semakin kompleks, dimulailah perjuangan memisahkan diri dari Desa Muhuran. 
            <strong>21 April 2004</strong>, Sebelimbingan resmi menjadi <strong>Desa Persiapan</strong> 
            dengan <strong>Mus Mulyadi</strong> sebagai pejabat kepala desa.
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem;">
            Pemilihan kepala desa pertama pada <strong>2005</strong> dimenangkan oleh 
            <strong>Kusnadi AR</strong>. Peresmian Desa Sebelimbingan dilakukan 
            <strong>23 November 2005</strong> oleh Sekda Kutai, HM. Thamrin.
        </p>
        <p class="text-justify" style="line-height: 1.8; font-size: 1.05rem; color:#444;">
            Sejak saat itu, Desa Sebelimbingan terus berkembang, sejajar dengan desa-desa lain 
            di Kecamatan Kota Bangun, Kabupaten Kutai Kartanegara.
        </p>
    </div>
</section>


       <section class="section-padding-100-50 mb-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">📊 Administrasi Penduduk</h2>
            <p class="text-muted">
                Sistem digital yang mempermudah pengelolaan data dan informasi kependudukan untuk pelayanan publik yang efektif dan efisien.
            </p>
        </div>

        <div class="row g-5">
            <!-- Penduduk -->
            <div class="col-md-4 col-sm-6">
                <div class="card card-blue-shadow border-0 text-center h-100">
                    <div class="card-body py-5">
                        <h3 class="text-primary fw-bold mb-3">600</h3>
                        <p class="fw-semibold text-muted mb-0">Penduduk</p>
                    </div>
                </div>
            </div>

            <!-- Kepala Keluarga -->
            <div class="col-md-4 col-sm-6">
                <div class="card card-blue-shadow border-0 text-center h-100">
                    <div class="card-body py-5">
                        <h3 class="text-primary fw-bold mb-3">199</h3>
                        <p class="fw-semibold text-muted mb-0">Kepala Keluarga</p>
                    </div>
                </div>
            </div>

            <!-- Laki-Laki -->
            <div class="col-md-4 col-sm-6">
                <div class="card card-blue-shadow border-0 text-center h-100">
                    <div class="card-body py-5">
                        <h3 class="text-primary fw-bold mb-3">20</h3>
                        <p class="fw-semibold text-muted mb-0">Mutasi Penduduk</p>
                    </div>
                </div>
            </div>

            <!-- Perempuan -->
            <div class="col-md-4 col-sm-6">
                <div class="card card-blue-shadow border-0 text-center h-100">
                    <div class="card-body py-5">
                        <h3 class="text-primary fw-bold mb-3">292</h3>
                        <p class="fw-semibold text-muted mb-0">Perempuan</p>
                    </div>
                </div>
            </div>

            <!-- Mutasi Penduduk -->
            <div class="col-md-4 col-sm-6">
                <div class="card card-blue-shadow border-0 text-center h-100">
                    <div class="card-body py-5">
                        <h3 class="text-primary fw-bold mb-3">308</h3>
                        <p class="fw-semibold text-muted mb-0">Laki Laki</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- Peta Lokasi & Galeri -->
        <section class="mb-5">
            <!-- Galeri Tambahan Peta -->
            <h3 class="text-center text-primary font-weight-bold mb-3">Peta Lokasi Desa</h3>
            <div class="row mt-4 justify-content-center text-center">
                <div class="col-md-6 col-lg-5 mb-4">
                    <img src="{{ asset('img/icons') }}/administrasi.jpg" alt="Peta 1" class="img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                </div>
                <div class="col-md-6 col-lg-5 mb-4">
                    <img src="{{ asset('img/icons') }}/petaa.jpg" alt="Peta 2" class="img-fluid rounded shadow-sm" style="max-width: 100%; height: auto;">
                </div>
            </div>

            <!-- <h3 class="text-center text-success font-weight-bold mb-3">Peta Lokasi Desa</h3> -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="p-4 bg-white rounded card-blue-shadow">
                        <h5 class="text-primary font-weight-bold">Informasi Wilayah</h5>
                        <p><strong>Utara:</strong> Desa Teluk Muda dan Desa Muara Siran</p>
                        <p><strong>Selatan:</strong> Desa Muhuran</p>
                        <p><strong>Timur:</strong> Desa Muara Siran dan Desa Muhuran</p>
                        <p><strong>Barat:</strong> Desa Semayang dan Desa Teluk Muda</p>
                        <hr>
                        <p><strong>Luas Wilayah:</strong> 4.936.345 m²</p>
                        <p><strong>Jumlah Penduduk:</strong> 600 Jiwa</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="shadow rounded overflow-hidden" style="height: 350px;">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64501.79001020285!2d116.489859206764!3d-0.16664845691611652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df6319de48e6dc3%3A0xc6357c7ebd8a715d!2sSebelimbingan%2C%20Kec.%20Kota%20Bangun%2C%20Kabupaten%20Kutai%20Kartanegara%2C%20Kalimantan%20Timur!5e1!3m2!1sid!2sid!4v1752075438039!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                    width="100%" height="100%" frameborder="0" allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        
    </div>
</div>

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
