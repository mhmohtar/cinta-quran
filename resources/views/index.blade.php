<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <!-- font google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style/styles.css') }}">
    <title>Cinta Quran</title>
  </head>
  <body>
    <!-- navbar -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="assets/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Program</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kajian</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Donasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kemitraan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Update</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" tabindex="-1">kontak</a>
                </li>
                <li class="nav-item">
                  <i class="fa fa-search nav-link px-3 mt-1" aria-hidden="true"></i>
                </li>
              </ul>
              <form class="d-flex">
                  <button class="btn btn-outline-primary rounded-pill px-5" type="submit">Masuk</button>
                </form>
            </div>
          </div>
      </nav>
    </div>
    <!-- end navbar -->
    <!-- section home -->
    <section class="home">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2 class="title">Dukung Program Dakwah Syiar Qur’an Project.</h2>
                    <p class="sub-title">Menumbuhkan motivasi agar masyarakat mencintai Alquran dengan program-program islami terbaik dan kreatif.</p>
                    <button type="button" class="btn-donasi rounded-pill">Donasi Sekarang <i class="fa fa-arrow-circle-right ps-2" aria-hidden="true"></i></button>
                    <div class="row">
                        <div class="col-lg-4 col-4">
                            <div>
                                <img src="assets/Icons/kajian.png" alt="">
                            </div>
                            <label class="pt-3">Kajian Perkantoran</label><br>
                            <span>+124</span>
                        </div>
                        <div class="col-lg-4 col-4">
                            <div>
                                <img src="assets/Icons/mosque.png" alt="">
                            </div>
                            <label class="pt-3">Majelis Cinta Quran</label><br>
                            <span>+43</span>
                        </div>
                        <div class="col-lg-4 col-4">
                            <div>
                                <img src="assets/Icons/online.svg" alt="">
                            </div>
                            <label class="pt-3">Kajian Online</label><br>
                            <span for="">+92</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('assets/img/frame.png') }}" alt="" class="w-75 frame">
                </div>
            </div>
        </div>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f9fd" fill-opacity="1" d="M0,64L120,58.7C240,53,480,43,720,85.3C960,128,1200,224,1320,272L1440,320L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
    </section>
    <!-- end section -->

    <!-- start section donasi -->
    <section class="donasi">
      <div class="container pb-5">
        <div class="pt-5 d-flex justify-content-between">
          <h2 class="">Donasi Pilihan</h2>
          <div>
            <span class="bg-light rounded-circle px-3 py-2 border border-info fw-bold me-3"><i class="fas fa-angle-left fw-bold"></i></span>
            <span class="bg-light rounded-circle px-3 py-2 border border-info"><i class="fas fa-angle-right"></i></span>
          </div>
        </div>
        <p>Pilih dan salurkan donasi melalui program-program kami yang berarti bagi sahabat Cinta quran.</p>
        <div class="d-flex justify-content-start">
          <button class="btn-donasi rounded-pill px-4"> <img src="{{asset('assets/kategori-badge/Icons/overview.png')}}" class="icon-label"> <span class="label">Semua Kategori</span></button>
          <button class="btn-donasi rounded-pill px-4 mx-3"> <img src="{{asset('assets/kategori-badge/Icons/donasi.png')}}" class="icon-label"> <span class="label">Kemanusiaan</span></button>
          <button class="btn-donasi rounded-pill px-4 mx-3"> <img src="{{asset('assets/kategori-badge/Icons/mosque.png')}}" class="icon-label"> <span class="label">IBBQ</span></button>
          <button class="btn-donasi rounded-pill px-4 mx-3"> <img src="{{asset('assets/kategori-badge/Icons/Wakaf.png')}}" class="icon-label"> <span class="label">Wakaf</span></button>
          <button class="btn-donasi rounded-pill px-4 mx-3"> <img src="{{asset('assets/kategori-badge/Icons/more.png')}}" class="icon-label"> <span class="label">Lainnya</span></button>
        </div>
        <div class="row py-3">
          
          <div class="col-lg-4">
            <div class="card mb-3">
              <img src="{{asset('assets/Components/Card/card-1.jpg')}}" class="card-img-top" alt="...">
              <!-- <img src="assets/Components/Card/card-1.jpg" class="card-img-top" alt="..."> -->
              <div class="card-body">
                <p class="title">Sedekah Beras untuk seluruh para keluarga di afrika selatan</p>
                <div class="d-flex justify-content-between">
                  <label>Dana Terkumpul</label>
                  <label>Siswa Waktu</label>
                </div>
                <div class="d-flex justify-content-between">
                  <span>Rp 0</span>
                  <span>Rp 25.000.000</span>
                </div>
                <div class="progress my-3" style="height: 5px;">
                  <div class="progress-bar bg-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <img src="{{ asset('assets/Components/Card/card-2.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="title">Bantu Bencana Gempa dengan Kebutuhan Pokok</p>
                <div class="d-flex justify-content-between">
                  <label>Dana Terkumpul</label>
                  <label>Siswa Waktu</label>
                </div>
                <div class="d-flex justify-content-between">
                  <span>Rp 500.000.124</span>
                  <span>2 Hari Lagi</span>
                </div>
                <div class="progress my-3" style="height: 5px;">
                  <div class="progress-bar bg-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-3">
              <img src="{{ asset ('assets/Components/Card/card-3.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="title">Penyaluran Bantuan untuk Anak Yatim dan Dhuafa</p>
                <div class="d-flex justify-content-between">
                  <label>Dana Terkumpul</label>
                  <label>Siswa Waktu</label>
                </div>
                <div class="d-flex justify-content-between">
                  <span>Rp 235.366.942</span>
                  <span>11 Hari Lagi</span>
                </div>
                <div class="progress my-3" style="height: 5px;">
                  <div class="progress-bar bg-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div><img src="{{asset('assets/donasi/zakat.png')}}" alt=""></div>
              <div>
                <h3 class="title">Zakat 100%</h3>
                <p class="sub-title">Tunaikan Zakat Anda melalui Program Zakat 100% Amanah.</p>
                <p class="selengkapnya">Selengkapnya</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div><img src="{{asset('assets/donasi/berkah.png')}}" alt=""></div>
              <div>
                <h3 class="title">Barang Berkah</h3>
                <p class="sub-title">Tunaikan Zakat Anda melalui Program Zakat 100% Amanah.</p>
                <p class="selengkapnya">Selengkapnya</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div><img src="{{asset('assets/donasi/box.png')}}" alt=""></div>
              <div>
                <h3 class="title">Amazing Box</h3>
                <p class="sub-title">Tunaikan Zakat Anda melalui Program Zakat 100% Amanah.</p>
                <p class="selengkapnya">Selengkapnya</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section donasi -->

    <!-- section program -->
    <section class="program">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#E8F4FB" fill-opacity="1" d="M0,256L120,240C240,224,480,192,720,202.7C960,213,1200,267,1320,293.3L1440,320L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> -->
      <div class="container pb-3">
        <div class="pt-5 d-flex justify-content-between">
          <h2 class="">Program Pilihan</h2>
          <div>
            <span class="bg-light rounded-circle px-3 py-2 border border-info fw-bold me-3"><i class="fas fa-angle-left fw-bold"></i></span>
            <span class="bg-light rounded-circle px-3 py-2 border border-info"><i class="fas fa-angle-right"></i></span>
          </div>
        </div>
        <p>Program-program terbaik dari Cinta QuraN Foundation untuk Sahabt Cinta Quran.</p>
        
        <div class="row py-3">
          
          <div class="col-lg-8">
            <div class="card text-white bg-program-1">
              <div class="card-body program-body">
                <p class="title">Indonesia Bisa Baca Quran</p>
                <span class="sub-title">Sebuah Fakta mengejutkan menyatakan bahwa 53,57% (BPS 2018). kaum muslimin di Indonesia tidak bisa membaca Al-Quran. </span>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-white bg-program mb-3">
                <div class="card-body program-body">
                  <p class="title">CintaQuran Call</p>
                  <span class="sub-title">Cinta Quran Call merupakan layanan pendampingan.</span>
                </div>  
              </div>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card perkantoran">
              <div class="card-body program-body">
                <p class="title">Kajian Perkantoran</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card majelis">
              <div class="card-body program-body md-mt-5">
                <p class="title">Majelis Cinta Quran</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card cinta">
              <div class="card-body program-body mt-md-5">
                <p class="title">Cinta Quran TV</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end section program -->

    <!-- section kajian inspiratif -->
    <section class="kajian-inspiratif">
      <div class="container">
        <h2 class="text-center pt-5">Kajian Inspiratif</h2>
        <p class="text-center">Program kajian inspiratif dari kami untuk menemani aktivitas Sahabat Cinta Qur’an.</p>
        <div class="d-flex justify-content-between">
          <button class="btn-donasi rounded-pill px-3"> <img src="{{asset('assets/kategori-badge/Icons/overview.png')}}" class="icon-label"> <span class="label">Semua Kajian</span></button>
          <button class="btn-donasi rounded-pill px-3 mx-3"> <img src="{{asset('assets/kajian-inspiratif/icons/live-2.png')}}" class="icon-label">  <span class="label">Berlangsung</span></button>
          <button class="btn-donasi rounded-pill px-3 mx-3"> <img src="{{asset('assets/kajian-inspiratif/icons/calendar.png')}}" class="icon-label"> <span class="label">Akan Datang</span></button>
          <button class="btn-donasi rounded-pill px-3 mx-3"> <img src="{{asset('assets/kajian-inspiratif/icons/office.png')}}" class="icon-label"> <span class="label">Perkantoran</span></button>
          <button class="btn-donasi rounded-pill px-3 mx-3"> <img src="{{asset('assets/kajian-inspiratif/icons/online.png')}}" class="icon-label"> <span class="label">Online</span></button>
          <button class="btn-donasi rounded-pill px-3 mx-3"> <img src="{{asset('assets/kategori-badge/Icons/more.png')}}" class="icon-label"> <span class="label">Lainnya</span></button>
        </div>
        <div class="row py-4">
          <div class="col-lg-6">
            <div class="card first-inspiratif mb-2">
              
              <div class="card-body">
                <div class="mt-3">
                  <span class="bg-danger rounded-pill text-light px-3 py-2"> <img src="{{asset('assets/kajian-inspiratif/icons/live.png')}}" alt=""> Sedang Berlangsung</span>
                </div>
                <div class="program-body">
                  <h3 class="sub-title">Cinta Quran Creative Studio</h3>
                  <span class="title pt-5">Menyempurnakan Taqwa</span><br>
                  <span class="date pt-5">Kamis, 30 September 2021</span><br>
                  <span class="time mt-5">09:00 - 10:00</span>
                </div>  
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <!-- <div class="col-lg-4 col-md-3 col-sm-6 col-6">
                <div class="card inspiratif m-3">
                  <div class="card-body">
                  </div>
                </div>
              </div> -->
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-3 col-4">
                <div class="card inspiratif mb-3">
                  <div class="card-body">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
            <div class="card inspiratif mb-3"></div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
            <div class="card inspiratif mb-3"></div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
            <div class="card inspiratif mb-3"></div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
            <div class="card inspiratif mb-3"></div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
            <div class="card inspiratif mb-3"></div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-3 col-4">
            <div class="card inspiratif mb-3"></div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- end section kajian inspiratif -->

    <!-- section amazing group -->
    <section class="amazing pb-5 pt-5">
      <h2 class="text-center pb-5">Amazing Group</h2>
        <div class="d-flex justify-content-between box">
          <div class="col-lg-2 col-md-2 col-2">
            <img src="{{asset('assets/amazing/grup-1.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2 col-2">
            <img src="{{asset('assets/amazing/grup-2.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2 col-2">
            <img src="{{asset('assets/amazing/grup-3.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2 col-2">
            <img src="{{asset('assets/amazing/grup-4.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2 col-2">
            <img src="{{asset('assets/amazing/grup-2.png')}}" alt="" class="grup">
          </div>
        </div>
        <div class="d-flex justify-content-between box pt-5">
          <div class="col-lg-2 col-md-2">
            <img src="{{asset('assets/amazing/grup-1.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2">
            <img src="{{asset('assets/amazing/grup-2.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2">
            <img src="{{asset('assets/amazing/grup-3.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2">
            <img src="{{asset('assets/amazing/grup-4.png')}}" alt="" class="grup">
          </div>
          <div class="col-lg-2 col-md-2">
            <img src="{{asset('assets/amazing/grup-1.png')}}" alt="" class="grup">
          </div>
        </div>
    </section>    
    <!-- end amazing group -->
    <!-- section panel -->
    <section class="panel">
      <div class="container">
        <div class="box">
          <h3 class="title ms-5">Mari bergabung menjadi keluarga Cinta<br> Quran Foundation agar bisa berbagi<br> dengan sesama</h3>
          <button class="btn btn-light px-5 ms-5 mt-3 rounded-pill btn-daftar">Daftar Sekarang <i class="fa fa-arrow-circle-right ps-2" aria-hidden="true"></i></button>
        </div>
      </div>
    </section>
    <!-- end panel -->
    <!-- footer -->
    <footer class="pb-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-4 col-12">
            <div class="single-box">
              <div class="card-area">
                <div>
                  <img src="{{asset('assets/img/logo.png')}}" alt="" class="pb-3">
                </div>
                <p class="float-start">Cinta Quran Foundation adalah lembaga independen yang mendakwahkan Alquran sebagai<br> solusi dan inspirasi untuk negeri.</p>
                <div class="card-area">
                  <div class="mb-3">
                    <button class="btn btn-laporan rounded-pill px-3"><i class="fa fa-arrow-circle-right pe-2" aria-hidden="true"></i>Lihat Laporan CQ Foundation</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="single-box">
              <div class="card-area">
                <ul>
                  <li>Program</li>
                  <li>Donasi</li>
                  <li>Kajian</li>
                  <li>Kemitraan</li>
                  <li>Inspirasi</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-6">
            <div class="single-box">
              <div class="card-area">
                <ul>
                  <li>Volunteer</li>
                  <li>Tentang Kami</li>
                  <li>FAQ</li>
                  <li>Syariat & Ketentuan</li>
                  <li>Kebijakan Privasi</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="single-box">
              <div class="card-area">
                <ul>
                  <li>
                    <i class="fa-solid fa-location-dot pe-2"></i> Jl. Parikesit Raya No.35-37 Bantarjati, Bogor Utara, Kota Bogor 16153, Jawa Barat, Indonesia.<br>
                  </li>
                  <li>
                    <i class="fa-regular fa-envelope pe-2 py-2"></i> info@cintaquran.or.id<br>
                  </li>
                  <li>
                    <i class="fa-solid fa-phone pe-2 py-2"></i> (0251) 85 717 62 <span class="btn btn-hubungi rounded-pill ms-3">Hubungin Kami <i class="fa-brands fa-whatsapp"></i></span><br>
                  </li>
                  <li>
                    <span class="fw-bold">Ikuti Kami</span><br>
                  </li>
                  <li>
                    <i class="fa-brands fa-facebook p-1 text-light bg-dark rounded-circle"></i>
                    <i class="fa-brands fa-youtube p-1 text-light bg-dark rounded-circle"></i>
                    <i class="fa-brands fa-instagram p-1 text-light bg-dark rounded-circle"></i>
                    <i class="fa-brands fa-linkedin p-1 text-light bg-dark rounded-circle"></i>
                  </li>
                </ul>
                
                <!-- <ul>
                  <li><i class="fa-solid fa-location-dot"></i> Jl. Parikesit Raya No.35-37 Bantarjati, Bogor Utara, Kota Bogor 16153, Jawa Barat, Indonesia.</li>
                  <li><i class="fa-regular fa-envelope"></i>info@cintaquran.or.id</li>
                  <li><i class="fa-solid fa-phone"></i> (0251) 85 717 62 <span class="btn btn-success rounded-pill ms-3">Hubungin Kami</span> </li>
                </ul> -->
                <!-- <span class="bg-dark rounded-circle">
                </span> -->
              </div>
            </div>
          </div>
          <p>© Copyright CintaQuran® Foundation All Rights Reserved.</p>
        </div>
      </div>
     </footer>
    <!-- end footer -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>