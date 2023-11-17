@extends( 'layouts.main' )

@section('container')
     
     <!-- My Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,100;1,400&display=swap" rel="stylesheet">

     <!-- Feather Icons -->
     <script src="https://unpkg.com/feather-icons"></script>


     <link rel="stylesheet" href="/css/style.css">
     <!-- Jumbotron -->
     <section class="jumbotron text-center" style="background-color:#F3EEEA; padding-top:2rem;">
          <img src="/img/logo-kumham.png" alt="pemasyarakatan" width="200" class="rounded-circle img-thumbnail">
          <h1 class="display-4"><strong>LEMBAGA PEMBINAAN KHUSUS ANAK KELAS II PANGKALPINANG</strong></h1>
          <p style="color:red;"class="lead">Lembaga atau tempat anak menjalani masa pidananya. LPKA merupakan Unit pelaksana teknis yang berkedudukan di bawah dan bertanggung jawab kepada Direktur Jenderal Pemasyarakatan</p>
          <h1><strong>SI PERKASA</strong></h1>
          <h6 class="text-primary"><strong>SISTEM INFORMASI PEMERIKSAAN SARANA PRASARANA</strong></h6>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#928679" fill-opacity="1" d="M0,256L30,261.3C60,267,120,277,180,245.3C240,213,300,139,360,117.3C420,96,480,128,540,170.7C600,213,660,267,720,245.3C780,224,840,128,900,122.7C960,117,1020,203,1080,197.3C1140,192,1200,96,1260,48C1320,0,1380,0,1410,0L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
     </section>
     <!-- akhir jumbotron -->

    <!-- Footer -->
    <section class="footer text-center" style="background-color:#5c2c35; padding-top:2rem;">
          <!-- <img src="/img/logopas.jpeg" alt="pemasyarakatan" width="200" class="rounded-circle img-thumbnail"> -->
          <!-- <h1 class="display-4">LEMBAGA PEMBINAAN KHUSUS ANAK KELAS II PANGKALPINANG</h1> -->
          <!-- <p style="color:red;"class="lead">Lembaga atau tempat anak menjalani masa pidananya. LPKA merupakan Unit pelaksana teknis yang berkedudukan di bawah dan bertanggung jawab kepada Direktur Jenderal Pemasyarakatan</p> -->
          <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,208C384,213,480,171,576,170.7C672,171,768,213,864,208C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
     <h6>Copyright@2023</h6>
     <div class="mb-3">
          <img src="/img/logo-bawah.png" alt="" width="220" height="25">
     </div>

     <div class="mb-3">
          <a class="px-3 text-decoration-none" href="https://www.facebook.com/lpka.pangkalpinang.5"><span data-feather="facebook" class="align-text-bottom"></span>Facebook</a>
          <a class="px-3 text-decoration-none" href="https://twitter.com/LPKAPkpinang"><span data-feather="twitter" class="align-text-bottom"></span>Twitter</a>
          <a class="px-3 text-decoration-none" href="https://www.instagram.com/lpkapangkalpinang/"><span data-feather="instagram" class="align-text-bottom"></span>Instagram</a>
          <a class="px-3 text-decoration-none" href="https://lpkapangkalpinang.kemenkumham.go.id/"><span data-feather="globe" class="align-text-bottom"></span>Website</a>
     </div>
    
          
     <!-- Feather Icons -->
     <script>
      feather.replace()
    </script>

     
     </section>
     <!-- akhir footer -->

@endsection