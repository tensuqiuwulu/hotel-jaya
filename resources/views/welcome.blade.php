<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Jaya</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel Jaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visi-misi">Visi Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#biaya">Biaya Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pendaftaran">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        <section id="gambar-awal" class="mt-5">
            <div class="container-fluid p-0">
                <img src="{{ asset('gambar/gambarawal.jpeg') }}" class="img-fluid w-100" alt="Gambar Hotel Jaya">
            </div>
        </section>

        <!-- Sejarah -->
        <section id="sejarah">
            <div class="container mt-5">
                <h2 class="text-center">Sejarah Hotel Jaya</h2>
                <p>
                    Didirikan pada tahun 1985 di jantung kota yang ramai, <strong>Hotel Jaya</strong> adalah hasil mimpi besar dari seorang visioner, Bapak Jaya Kusuma. Bermula dari sebuah rumah tamu kecil dengan hanya 10 kamar, Bapak Jaya memiliki visi untuk menciptakan sebuah oasis di tengah hiruk-pikuk kota, tempat di mana setiap tamu dapat merasakan kedamaian dan kenyamanan layaknya di rumah sendiri.
                </p>
                <p>
                    Dengan kerja keras, dedikasi, dan fokus pada layanan pelanggan yang luar biasa, Hotel Jaya berkembang pesat. Pada tahun 1990, hanya dalam waktu lima tahun, Hotel Jaya berhasil menambah jumlah kamar menjadi 50 kamar. Setiap kamar dirancang dengan unik, menggabungkan elemen tradisional dan modern, menciptakan suasana hangat dan mengundang.
                </p>
                <p>
                    Tahun-tahun berikutnya membawa lebih banyak inovasi dan pertumbuhan. Pada tahun 2000, Hotel Jaya menambahkan fasilitas baru, termasuk spa mewah, pusat kebugaran canggih, dan restoran yang menyajikan hidangan lokal dan internasional. Hotel ini tidak hanya menjadi tempat peristirahatan yang nyaman bagi para wisatawan tetapi juga sebuah landmark kota dan pusat pertemuan komunitas.
                </p>
                <p>
                    Puncaknya, pada tahun 2010, Hotel Jaya merayakan 25 tahun keberadaannya dengan merenovasi seluruh properti, memperkenalkan teknologi ramah lingkungan, dan memperbarui desain interior untuk mencerminkan harmoni antara alam dan kemewahan modern. Renovasi ini menegaskan kembali komitmen Hotel Jaya terhadap keberlanjutan dan inovasi tanpa mengorbankan kenyamanan dan gaya.
                </p>
                <p>
                    Hari ini, Hotel Jaya tidak hanya diakui sebagai salah satu hotel terbaik di kota tetapi juga sebagai sebuah institusi yang mempromosikan kebudayaan, seni, dan keramahan lokal. Dengan mengadakan acara budaya secara regular, hotel ini telah menjadi pusat kebudayaan dan pertemuan, mengundang tamu dan warga lokal untuk merasakan keindahan dan kekayaan tradisi daerah.
                </p>
                <p>
                    Melalui perjalanan panjang ini, Hotel Jaya tetap setia pada nilai-nilai intinya: pelayanan yang tulus, kehangatan, dan perhatian terhadap detail. Setiap tamu yang melangkah masuk ke Hotel Jaya diundang untuk menjadi bagian dari sejarah yang terus berlanjut, sebuah cerita tentang mimpi, pertumbuhan, dan komitmen terhadap keunggulan.
                </p>
            </div>
        </section>


        <!-- Visi Misi -->
        <section id="visi-misi">
            <div class="container mt-5">
                <h2 class="text-center">Visi & Misi</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Visi</h3>
                        <p>Menjadi pilihan utama bagi para wisatawan dengan menyediakan pengalaman menginap yang tak terlupakan melalui layanan yang luar biasa, fasilitas bertaraf internasional, dan lingkungan yang harmonis.</p>
                    </div>
                    <div class="col-md-6">
                        <h3>Misi</h3>
                        <ul>
                            <li>Menyediakan layanan yang hangat, penuh perhatian, dan profesional.</li>
                            <li>Memastikan kenyamanan dan kepuasan tamu melalui fasilitas dan layanan yang berkualitas.</li>
                            <li>Menginspirasi dan memperkaya hidup tamu kami dengan kebudayaan dan keindahan lokal.</li>
                            <li>Berkontribusi pada komunitas dan lingkungan melalui praktik berkelanjutan dan bertanggung jawab.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section id="gallery" class="mt-5">
            <div class="container">
                <h2 class="text-center mb-5">Gallery</h2>
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <img src="{{asset('gambar/foto1.jpeg')}}" class="img-fluid" alt="Foto Hotel Jaya 1">
                    </div>
                    <div class="col-md-3 mb-4">
                        <img src="{{asset('gambar/foto2.jpeg')}}" class="img-fluid" alt="Foto Hotel Jaya 2">
                    </div>
                    <div class="col-md-3 mb-4">
                        <img src="{{asset('gambar/foto3.jpeg')}}" class="img-fluid" alt="Foto Hotel Jaya 3">
                    </div>
                    <div class="col-md-3 mb-4">
                        <img src="{{asset('gambar/foto4.jpeg')}}" class="img-fluid" alt="Foto Hotel Jaya 4">
                    </div>
                    <!-- Tambahkan lebih banyak <div class="col-md-3"> untuk foto-foto lainnya sesuai kebutuhan -->
                </div>
            </div>
        </section>

        <!-- Biaya -->
        <section id="biaya" class="mt-5">
            <div class="container">
                <h2 class="text-center mb-4">Biaya Kamar</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Jenis Kamar</th>
                                <th>Ukuran</th>
                                <th>Pemandangan</th>
                                <th>Harga per Malam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Standard</td>
                                <td>20m²</td>
                                <td>Kota</td>
                                <td>IDR 750.000</td>
                            </tr>
                            <tr>
                                <td>Superior</td>
                                <td>25m²</td>
                                <td>Taman</td>
                                <td>IDR 1.000.000</td>
                            </tr>
                            <tr>
                                <td>Deluxe</td>
                                <td>30m²</td>
                                <td>Laut</td>
                                <td>IDR 1.250.000</td>
                            </tr>
                            <tr>
                                <td>Suite</td>
                                <td>50m²</td>
                                <td>Laut & Kota</td>
                                <td>IDR 2.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Pendaftaran -->
        <section id="pendaftaran" class="mt-5">
            <div class="container">
                <h2 class="text-center mb-4">Formulir Pendaftaran</h2>
                <form>
                    <div class="form-group">
                        <label for="namaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="nomorTelepon">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="nomorTelepon" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="form-group">
                        <label for="jenisKamar">Jenis Kamar</label>
                        <select class="form-control" id="jenisKamar">
                            <option>Standard</option>
                            <option>Superior</option>
                            <option>Deluxe</option>
                            <option>Suite</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggalCheckIn">Tanggal Check-In</label>
                        <input type="date" class="form-control" id="tanggalCheckIn">
                    </div>
                    <div class="form-group">
                        <label for="tanggalCheckOut">Tanggal Check-Out</label>
                        <input type="date" class="form-control" id="tanggalCheckOut">
                    </div>
                    <div class="form-group">
                        <label for="catatanKhusus">Catatan Khusus</label>
                        <textarea class="form-control" id="catatanKhusus" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>


        <!-- Kontak -->
        <section id="kontak" class="mt-5">
            <div class="container">
                <h2 class="text-center mb-4">Kontak Kami</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h4>Informasi Kontak</h4>
                        <p><strong>Telepon:</strong> +62 812 3456 7890</p>
                        <p><strong>Email:</strong> info@hoteljaya.com</p>
                        <p><strong>Alamat:</strong> Jl. Maju Terus No.1, Bali, Indonesia</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Lokasi</h4>
                        <!-- Ganti "YOUR_GOOGLE_MAPS_EMBED_LINK" dengan link embed peta Google Maps Anda -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2774.3585940363705!2d115.14318996499189!3d-8.639472401746671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23889f70c0367%3A0x766be1e2f663b367!2sKubu%20Manyar%20Homestay!5e0!3m2!1sid!2sid!4v1701143076097!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row mt-3">
                <div class="col-12 text-center">
                    &copy; 2024 Hotel Jaya. All rights reserved.
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>