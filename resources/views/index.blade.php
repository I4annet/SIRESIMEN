<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satmenwa 874 - Politeknik Negeri Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="gradient-bg">
        <header class="fixed top-0 w-full p-4 bg-[#233232] border-b border-[#FFD700] z-50 transition-all duration-300" id="header">
            <nav class="flex justify-between items-center max-w-screen-xl mx-auto">
                <div class="flex items-center gap-3 text-white font-bold text-2xl">
                    <img src="{{ asset('images/profil.png') }}" alt="Logo Satmenwa874" class="w-10 h-10 object-cover">
                    <span class="text-white font-bold text-2xl">Satmenwa 874</span>
                </div>
                <ul class="nav-links hidden md:flex gap-8 list-none">
                    <li><a href="{{ url('/')}}" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Beranda</a></li>
                    <li><a href="{{ url('/tentang')}}" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Tentang</a></li>
                    <li><a href="{{ url ('/kegiatan')}}" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Kegiatan</a></li>
                    <li><a href="#kontak" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Kontak</a></li>
                </ul>
            </nav>
        </header>

        <section class="relative flex items-center justify-center min-h-screen pt-24 pb-8 text-center bg-[#2d004d]" id="beranda">
            <div class="floating-elements absolute inset-0 overflow-hidden pointer-events-none">
                <div class="floating-element absolute bg-white bg-opacity-10 rounded-full w-20 h-20 top-1/5 left-1/10"></div>
                <div class="floating-element absolute bg-white bg-opacity-10 rounded-full w-32 h-32 top-3/5 right-1/8"></div>
                <div class="floating-element absolute bg-white bg-opacity-10 rounded-full w-16 h-16 top-4/5 left-1/5"></div>
                <div class="floating-element absolute bg-white bg-opacity-10 rounded-full w-24 h-24 top-2/6 right-3/10"></div>
            </div>

            <div class="hero-content max-w-3xl text-white z-10 px-4">
                <h1 class="text-5xl font-extrabold mb-6">Satuan Resimen Mahasiswa 874</h1>
                <p class="hero-subtitle text-2xl mb-8 opacity-90">Politeknik Negeri Malang</p>
                <p class="hero-description text-lg mb-12 opacity-80 leading-relaxed">
                    Jadilah bagian dari pasukan intelektual yang tangguh! <br>
                    Gabung dengan <strong>Resimen Mahasiswa 874 Polinema</strong> dan temukan pengalaman luar biasa dalam membentuk karakter, kepemimpinan, kedisiplinan, serta jiwa bela negara. <br>
                    Kamu tidak hanya belajar di kelas, tapi juga di lapangan — mengabdi untuk bangsa sambil membangun masa depanmu.
                </p>
                <div class="cta-buttons flex justify-center gap-6 flex-wrap">
                    <a href="#fitur" class="btn btn-secondary px-10 py-4 rounded-full text-xl font-semibold cursor-pointer transition-all duration-300 inline-block overflow-hidden relative bg-white bg-opacity-20 text-white border-2 border-[#FFD700] border-opacity-30 backdrop-blur-md hover:-translate-y-1 hover:shadow-xl">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </section>

        <section class="features py-20 px-8 bg-[#2D004D]">
            <div class="features-container max-w-screen-xl mx-auto text-center">
                <h2 class="text-4xl text-white mb-12 font-bold">Mengapa Bergabung dengan Resimen Mahasiswa?</h2>
                <div class="features-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-[#FFD700] border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#FFD700] to-[#4B0082] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🤖</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Kepemimpinan Tangguh</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Menwa membentuk karakter pemimpin yang disiplin, tangguh, dan siap menghadapi tantangan di masa depan.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-[#FFD700] border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#FFD700] to-[#4B0082] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🏢</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Wawasan Bela Negera</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Mengikuti pendidikan dan pelatihan semi-militer untuk meningkatkan semangat cinta tanah air dan tanggung jawab kebangsaan.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-[#FFD700] border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#FFD700] to-[#4B0082] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">📊</div>
                         <h3 class="text-2xl text-white mb-4 font-semibold">Disiplin dan Etika</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Anggota Menwa dibentuk melalui pola hidup disiplin, tertib, dan beretika tinggi sebagai panutan mahasiswa lainnya.</p>
                    </div>   
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-white border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#f093fb] to-[#f5576c] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🎯</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Pengembangan Diri</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Menwa menyediakan ruang untuk mengasah fisik, mental, dan spiritual melalui pelatihan dan kegiatan kemahasiswaan.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-white border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#f093fb] to-[#f5576c] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">📱</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Pelatihan Lapangan</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Menwa memberikan pengalaman langsung di alam terbuka, dari baris-berbaris, survival, hingga manuver lapangan yang melatih fisik dan ketangguhan mental.</p>
                    </div>
                     <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-white border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#f093fb] to-[#f5576c] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">📱</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Aksi Sosial dan Kemanusiaan</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Terlibat aktif dalam kegiatan sosial, pengamanan kampus, hingga bantuan bencana dan kedaruratan.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats py-16 px-8 bg-gradient-to-r bg-[#2D004D]">
            <div class="stats-container max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="stat-item text-white">
                    <div class="stat-number text-5xl font-extrabold mb-2">500+</div>
                    <div class="stat-label text-lg opacity-90">Mahasiswa Terdaftar</div>
                </div>
                <div class="stat-item text-white">
                    <div class="stat-number text-5xl font-extrabold mb-2">100+</div>
                    <div class="stat-label text-lg opacity-90">Perusahaan Partner</div>
                </div>
                <div class="stat-item text-white">
                    <div class="stat-number text-5xl font-extrabold mb-2">95%</div>
                    <div class="stat-label text-lg opacity-90">Tingkat Keberhasilan</div>
                </div>
                <div class="stat-item text-white">
                    <div class="stat-number text-5xl font-extrabold mb-2">4.8★</div>
                    <div class="stat-label text-lg opacity-90">Rating Pengguna</div>
                </div>
            </div>
        </section>

        <footer class="footer py-5 px-8 bg-[#233232] text-center text-white border-t border-[#36441E]">
            <div class="footer-content max-w-screen-xl mx-auto">
                <div class="footer-info flex justify-center items-center gap-8 mb-8 flex-wrap">
                    <div class="contact-item flex items-center gap-2 opacity-80">
                        🌐 <span>satmenwa874.ac.id</span>
                    </div>
                    <div class="contact-item flex items-center gap-2 opacity-80">
                        📞 <span>0341 - 404424/404425</span>
                    </div>
                    <div class="contact-item flex items-center gap-2 opacity-80">
                        📍 <span>Malang, Jawa Timur</span>
                    </div>
                </div>
                <p>&copy; 2025 Satuan Resimen Mahasiswa 874. Semua hak dilindungi (Mungkin).</p>
            </div>
        </footer>
    </div>
</body>
</html>
                        