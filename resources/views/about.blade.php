@extends('master')

@section('content')
    <!-- ====== Page Header ====== --> 
    <div class="page-header default-template-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">    
                    <h2 class="page-title">About</h2>
                    <p class="page-description">About Application</p>                 
                </div><!-- /.col-md-12 -->
            </div><!-- /.row-->
        </div><!-- /.container-fluid -->           
    </div><!-- /.page-header -->

    <!-- ====== Breadcrumbs Area ====== --> 
    <div class="breadcrumbs-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Home</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">About</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

    <!-- ====== About Main Content ====== --> 
    <section class="about-main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-top-content">
                        <br>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="about-content-left">
                                    <h2>Specification Software</h2>
                                </div><!-- /.about-content-left-->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="about-content-right">
                                    <p>Dengan dibuatnya Sistem Informasi Sewa Apartemen berbasis laravel ini untuk menempuh mata kuliah Pengembangan Teknologi Web yang dibimbing oleh Bapak Agus Hermanto, S.Kom.,M.MT.,ITIL.,COBIT,SFC. <br>Dengan spesifikasi perangkat lunak:<br>
                                    Laravel: <strong>6</strong><br>
                                    Visual Canvas: <strong>LucidChart</strong><br>
                                    DBMS: <strong>MongoDB 4.2</strong><br>
                                    Web UI Mockup Tools: <strong>Justinmind</strong></p>
                                </div><!-- /.about-conten-right-->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="about-top-content">
                        <br>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="about-content-left">
                                    <h2>Rule Software</h2>
                                </div><!-- /.about-content-left-->
                            </div><!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="about-content-right">
                                    <p>Anda diminta untuk mendesain dan mengimplementasikan sebuah sistem persewaan apartemen.
                                    System ini akan digunakan untuk mendukung manajemen data sebuah agen persewaan
                                    apartemen. Untuk penyederhanaan sistem, diasumsikan bahwa agen bertanggung jawab terhadap
                                    beberapa apartemen yang berada di lokasi yang sama. Fokus dari aplikasi ditujukan untuk
                                    mengoptomasi layanan yang memungkinkan manajemen penghuni dari apartemen.</p>
                                    <p>Penjelasan ringkas mengenai kebutuhan data utama yang perlu disimpan, dikelola, dan diakses
                                    terdiri dari data mengenai staf, informasi apartemen, informasi penghuni, dan informasi pelamar.
                                    Informasi mengenai staf pada dasarnya terdiri dari nama, tanggal lahir, nomor KTP, alamat,
                                    beberapa nomor telpon, jabatan, gaji bulanan. Apartemen-apartemen yang dikelola ditempatkan
                                    pada sejumlah bangunan. Untuk ini diasumsikan bahwa semua bangunan mempunyai struktur
                                    yang sama dalam hal jumlah apartemen, jumlah lantai, dan satu daftar sumber daya (seperti
                                    mesin cuci, kotak sampah). Informasi yang menjelaskan sebuah apartemen berupa nomor
                                    apartemen, nomor bangunan, nomor lantai, jenis apartemen, jumlah apartemen yang masih
                                    tersisa (belum ada yang penghuninya). Setiap jenis apartemen dibedakan oleh beberapa fitur,
                                    seperti jumlah kamar, jenis lantai, jumlah kamar mandi, dan penyejuk udara sentral. Setiap jenis
                                    apartemen ini diasosiasikan dengan harga sewa yang berbeda. Informasi mengenai fasilitas
                                    komunitas yang berlaku umum untuk semua apartemen juga perlu dicatat, seperti kolam renang,
                                    kafe, dan lain-lain. Penghuni dari setiap apartemen mempunyai seorang penanggung jawab
                                    sebagai penghuni utama. Informasi mengenai penghuni meliputi semua data yang dihimpun pada
                                    saat seorang calon penghuni mengajukan permohonan untuk menyewa apartemen beserta
                                    informasi mengenai kontrak yang ditandatangani seperti apartemen yang disewa, sewa bulanan,
                                    uang muka, lama masa sewa, dan lain-lain. Sedang infromasi mengenai calon penyewa (pelamar)
                                    disimpan untuk satu periode satu tahun. Informasi yang disimpan berkaitan dengan orang-orang
                                    yang telah membuat lamaran untuk menyewa dan beberapa status lamarannya yang dapat berupa
                                    penundaan (seperti menunggu ketersedian apartemen kosong, menunggu hasil pemeriksaan
                                    untuk diminta kembali) atau ditolak. Informasi ini dapat digunakan untuk keperluan pembuatan
                                    berbagai statistik oleh manajer dari agen apartemen.</p>
                                    <p>Sistem dari aplikasi yang harus didesain dan dibuat harus menjamin beberapa layanan seperti
                                    berikut. Pertama mengenai ketersediaan apartemen.Pada saat klien (calon pelamar) yang
                                    mengakses laman (website) agen persewaan apartemen mengenai jenis apartemen yang mereka
                                    cari, sistem akan mengembalikan ketersedian beberapa apartemen yang memenuhi kebutuhan klien. Kriteria dari pencarian berupa jumlah kamar, jumlah kamar mandi, jenis lantai, dan fiturfitur tambahan. Sistem akan mengembalikan apartemen-apartemen yang memenuhi (semua atau
                                    sebagian) dari kriteia pencarian. Tanggal ketersediaan apartemen juga harus ditampilkan.
                                    Pengguna kemudian dapat melanjutkan pencariannya untuk melihat lebih lanjut mengenai detil
                                    apartemen yang memenuhi kebutuhannya dan mungkin penggunana kemudian akan
                                    memasukkan permohonan. Kedua mengenai pemyerahan aplikasi persewaan. Pengguna yang
                                    ingin mengajukan permohonan untuk menyewa apartemen harus mengisi borang aplikasi dengan
                                    informasi berupa: identifikasi pelamar (nama, tanggal lahir, nomor KTP, nomor NPWP, alamat
                                    tetap, beberapa nomor</p>
                                    <p>telpon dan semua orang yang akan menempati aparemen (pelamar utama, pelamar pendamping,
                                    dan beberapa pengikut), jabatan dan gaji bulana dari pelamar utama dan pelamar pendamping
                                    (atasan langsung tempat kerja dari pelamar utama dan pendamping juga perlu dicatat), sejarah
                                    persewaan apartemen sebelumnya jik ada (perlu dicatat agen apartemen dan lama masa sewa),
                                    informasi mengenai rekening bank (nomor rekening dan nama bank), dan informasi referensi
                                    (nama, alamat, nomor telpon, email, pekerjaan dari maksimum tiga orang yang akan dihubungi
                                    sehubungan dengan referensi pelamar), dan informasi mengenai orang yang akan dihubungi
                                    dalam keadaan darurat (nama, alamat, nomor telpon, dan hubungan keluarga). Ketiga mengenai
                                    manajemen akun. Penghuni apartemen harus dimungkinkan mengakses sistem secara online
                                    untuk melihat saldo uang mereka, merubah informasi personal seperti alamat kerja dan nomor
                                    telpon, mengecek masa sewa dan membayar sewa. Nama pengguna dan sandi (username dan
                                    password) harus diberikan kepada setiap penghuni agar dapat melakukan akses terhadap sistem.
                                    Keempat mengenai manajemen basis data. Manajer dan beberapa karyawan dari agen harus
                                    diberi kewenangan untuk mengelola basis data dari sistem persewaan apartemen. Layanan yang
                                    harus disedikan untuk ini adalah: memasukkan aplikasi yang dibuat secara offline,
                                    memutakhirkan aplikasi persewaan apda saat memasukkan hasil pemeriksaan sejarah pelamar,
                                    melihat informasi memgenai kontrak penghuni, menayangkan daftar nama-nama penghuni
                                    berdasarkan nama apartemen atau nomor lantai sebuah bangunan atau berdasarkan nama sebuah
                                    bangunan, daftar jumlah pelamar yang disetuji pada bulan atau tahun tertentu, daftar penghuni
                                    dengan saldo bernilai nol, daftar uang deposit yang dibuat oleh seorang pelamar, daftar akhir
                                    masa lamaran dari seorang pelamar, daftar nama-nama pelamar yang masa lamarannya akan
                                    berakhir pada tanggal tertentu, daftar fitur dari sebuah jenis apartemen, dan daftar fitur
                                    (ketersediaan dan jenis apartemen) untuk sebuah apartemen.</p>
                                </div><!-- /.about-conten-right-->
                            </div><!-- /.col-md-7 -->
                        </div><!-- /.row -->
                    </div><!-- /.top-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-main-content -->

@stop