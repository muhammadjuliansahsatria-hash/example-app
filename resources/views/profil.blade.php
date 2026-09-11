<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <p>data dari database adalah : {{ $user[0]->nama }}</p>
    </div>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profil/sambutan">Sambutan</a></li>
                            <li><a class="dropdown-item" href="/profil/program-studi">Program studi</a></li>
                            <li><a class="dropdown-item" href="/profil/akreditasi">Akreditasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <img src="/img/d3_manajemen_informatika_politeknik_negeri_lampung.jpg" class="melbabuw" alt="..."
        style="max-width:30%">
    <img src="/img/merbabu2.jpg" class="melbabuw" alt="..." style="max-width:30%">
    <h1>D3 Manajemen Informatika Politeknik Negri Lampung</h1>
    <p style="max-width: 90%; text-align: justify; margin-left: 5%;">Program Studi Manajemen Informatika jenjang Diploma
        Tiga (D3) adalah program studi
        yang menyelenggarakan
        pendidikan Vokasi jenjang D3, menghasilkan sumber daya manusia atau lulusan yang bermutu, inovatif dan berdaya
        bersaing dalam ilmu pengetahuan dan teknologi terapa bidang sistem informasi. Formulasi kompetensi utama lulusan
        disusun berdasarkan pedoman Kepmendiknas No. 045/U/2022. dengan bidang kajian kompetensi lulusan mengacu pada
        ACM-IEEE dan campaian pembelajaran mengacu pada SKNNI Level 5 dengan rujukan rekomendasi APTIKOM Level 5. Gelar
        akademik lulusan yang diperoleh adalah Ahli Madya Terapan yang menguasai bidang : 1) Programmer Sistem
        Informasi, 2) Administrator Web, 3) IT Support dan 4) Wirausaha dibidang teknologi informasi (technoprenuer).
    </p><br>

    <p style="max-width: 90%; text-align: justify; margin-left: 5%;">Program Studi D3 Manajemen Informatika didirikan
        dan mulai beroperasi
        menyelenggarakan kegiatan akademik dan
        tridarma perguruan tinggi sejak tahun 2006, berdasarkan Surat Keputusan Dirjen Dikti nomor 2691/D/T/2006. Sejak
        berdiri hingga saat ini, Program Studi D3 Manajemen Informatika telah banyak mengalami perkembangan, pada
        periode ke 3 akreditasi program studi manajemen informatika mendapatkan akreditasi B berdasarkan surat keputusan
        BAN-PT No. 415/SK/BAN-PT/Akred/Dpl-III/X/2014. Dan pada periode akreditas ke 4 saat ini program studi manajemen
        informatika mendapatkan Akreditasi B, berdasarkan surat keputusan BAN-PT
        No.2949/SK/BAN-PT/Ak-PPJ/Dipl-III/V/2020 Tahun 2020, dengan masa berlaku dari 2025-05-05. Selain akreditasi
        peningkatan lainnya adalah jumlah dan kualitas tenaga pendidik dan kependidikan, fasilitas, sarana prasarana,
        dan kepercayaan masyarakat (umum dan pengguna lulusan) terhadap lulusan (alumni) terus meningkat. Lulusan
        program studi D3 Manajemen Informatika telah mampu berkiprah di dunia kerja sebagai tenaga profesional dibidang
        teknologi informasi (TI) baik di instansi pemerintah/swasta, IT talent, wirausaha.</p>


    <table class="table table-striped" style="max-width:30%">
        <tbody>
            <tr>
                <td>Tahun Berdiri</td>
                <td><B>2006</B></td>
            </tr>
            <tr>
                <td>Akreditasi ( s.d. 05-05-2025)</td>
                <td><B>B</B></td>
            </tr>
            <tr>
                <td>Masa Studi / Semester</td>
                <td><B>3 Tahun / 6 Semester</B></td>
            </tr>
            <tr>
                <td>Jumlah SKS tempuh</td>
                <td><B>114 SKS</B></td>
            </tr>
            <tr>
                <td>Gelar Lulusan</td>
                <td><B>A.Md.</B></td>
            </tr>
            <tr>
                <td>Sertifikasi Kompetensi Lulusan</td>
                <td><b>YA</b></td>
            </tr>
        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>