@extends( 'layouts.main' )

@section('container')

    <!-- <h1>Halaman About</h1>
    <h3> {{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> -->

    <section class="jumbotron" style="background-color:#e2edff; padding-top:2rem;">
    <div class="row text-center mb-4">
        <div class="col">
            <h1>About Me</h1>
        </div>
    </div>
    <div class="row justify-content-center fs-4">
        <div class="col-md-4 px-5">
            <p>LPKA Pangkalpinang menempati Lembaga Pemasyarakatan Pangkalpinang lama yang sebelumnya diperuntukan untuk kantor  Rupbasan Kelas II pangkalpinang, mulai dibangun pada tanggal 30 September 2016, mendapatkan belanja modal rehab gedung  berdasarkan  surat perjanjian kontrak Nomor W.7.PAS7-366-PL.02.01 Tahun 2016 Kantor Rupbasan dibagi 2 ( dua ) fungsi sebagian untuk kantor rupbasan sebagian untuk LPKA. LPKA pangkalpinang resmi beroperasi dengan diterbitkannya Surat Keputusan Menteri Hukum dan HAM RI Nomor : SEK-23.KP.03.03 Tahun 2016 tanggal 23 September 2016  tentang Pengangkatan Kepala Lembaga Pembinaan Khusus Anak Kelas II Pangkalpinang, dan mulai operasional pada tanggal 1 Maret Tahun 2017 dan beralamat di Jalan Stania Pangkalpinang Kep. Bangka Belitung dengan jumlah petugas 20 orang, dan mempunyai daya tampung sekitar 50 penghuni. Pada saat ini Lembaga Pembinaan Khusus Anak Kelas II Pangkalpinang beralamat di Jalan Ahmad Yani No.21, Pangkalpinang Kep. Bangka Belitung dengan jumlah petugas 61 orang dan mempunyai daya tampung 50 orang Andikpas.</p>
        </div>
        <div class="col-md-4 px-5">
            <p>LPKA mempunyai tugas melaksanakan pembinaan anak didik pemasyarakatan. Untuk melaksanakan tugas sebagaimana dimaksud, LPKA menyelenggarakan fungsi :</p>
            <ul>
                <li>Registrasi dan klasifikasi yang dimulai dari penerimaan, pencatatan baik secara manual maupun elektronik, penilaian, pengklasifikasian, dan perencanaan program;</li>
                <li>Pembinaan yang meliputi pendidikan, pengasuhan, pengentasan dan pelatihan keterampilan, serta layanan informasi;</li>
                <li>Perawatan yang meliputi pelayanan makanan, minuman, dan pendistribusian perlengkapan dan pelayanan kesehatan;</li>
                <li>Pengawasan dan penegakan disiplin yang meliputi administrasi penagawasan, pencegahan dan penegakan disiplin serta pengelolaan pengaduan; dan</li>
                <li>Pengelolaan urusan umum yang meliputi urusan kepegawaian, tata usaha, penyusunan rencana anggaran, pengelolaan urusan keuangan serta perlengkapan dan rumah tangga.</li>
            </ul>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,170.7C672,171,768,213,864,208C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

@endsection