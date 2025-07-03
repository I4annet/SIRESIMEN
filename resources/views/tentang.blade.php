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
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/profil.png') }}" alt="Logo Satmenwa874" class="w-10 h-10 object-cover">
            <span class="text-white font-bold text-2xl">Satmenwa 874</span>
        </div>
        <ul class="nav-links hidden md:flex gap-8 list-none">
            <li><a href="{{ url('/') }}" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Beranda</a></li>
            <li><a href="{{ url('/tentang') }}" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Tentang</a></li>
            <li><a href="{{ url('/kegiatan') }}" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Kegiatan</a></li>
            <li><a href="#kontak" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Kontak</a></li>
        </ul>
    </nav>
</header>
<section class="features py-20 px-8 bg-[#2D004D]">
    <div class="features-container max-w-screen-xl mx-auto text-center">
        <h2 class="text-white text-3xl font-bold mb-6">Resimen Mahasiswa Satuan 874 "Satria Cendekia Utama"</h2>
        <p class="text-white text-base leading-relaxed mb-6 max-w-4xl mx-auto">
            Resimen Mahasiswa Politeknik Negeri Malang mengalami proses yang cukup panjang. 
            Sebelum resmi menjadi Satuan Resimen Mahasiswa (SATMENWA) 874, resimen ini bernama Politeknik Universitas Brawijaya 
            dan tergabung dengan Universitas Brawijaya dengan status SATMENWA 803 Brawijaya. 
            Ketika terjadi pemindahan status Politeknik Universitas Brawijaya menjadi Politeknik Negeri Malang, 
            maka terbentuklah Satuan 874 Politeknik Negeri Malang pada tanggal 18 Juni 1986.
        </p>
        <img src="{{ asset('images/profil.png') }}" alt="Logo Satmenwa874" class="mx-auto rounded-xl shadow-lg w-48 h-auto mb-10">
         <h3 class="text-white text-2xl font-semibold mb-4">Panca Dharma Satya</h3>
        <ul class="text-white text-base text-left leading-relaxed max-w-3xl mx-auto list-decimal pl-5 space-y-4">
            <li>
                Kami adalah mahasiswa warga negara, Negara Kesatuan Republik Indonesia yang berdasarkan Pancasila. 
            </li>
            <li>
                Kami adalah mahasiswa yang sadar akan tanggung jawab serta kehormatan akan pembelaan negara dan tidak mengenal menyerah.
            </li>
            <li>
               Kami Putra Indonesia yang berjiwa ksatria dan bertakwa kepada Tuhan Yang Maha Esa serta membela kejujuran, kebenaran dan keadilan.
            </li>
            <li>
               Kami adalah mahasiswa yang menjunjung tinggi nama dan kehormatan Garba Ilmiah dan sadar akan hari depan bangsa dan negara.
            </li>
            <li>
               Kami adalah mahasiswa yang memegang teguh disiplin lahir dan batin, percaya pada diri sendiri dan mengutamakan kepentingan Nasional di atas kepentingan pribadi maupun golongan.  
            </li>
        </ul>
        
        <h3 class="text-white text-2xl font-semibold mb-4">Visi</h3>
        <p class="text-white text-base leading-relaxed mb-8 max-w-3xl mx-auto">
            Menjadi Unit Kegiatan Mahasiswa yang handal dan profesional dalam melaksanakan kegiatan, 
            khususnya di bidang Pertahanan dan Keamanan yang berlandaskan Pancasila, UUD 1945, 
            Panca Dharma Satya, dan Tri Dharma Perguruan Tinggi.
        </p>
        <h3 class="text-white text-2xl font-semibold mb-4">Misi</h3>
        <ul class="text-white text-base text-left leading-relaxed max-w-3xl mx-auto list-decimal pl-5 space-y-4">
            <li>
                Menghasilkan SDM yang unggul dalam bidang Pertahanan dan Keamanan, bertakwa kepada Tuhan Yang Maha Esa, berakhlak tinggi, dan berbudaya Indonesia.
            </li>
            <li>
                Mempersiapkan mahasiswa yang memiliki pengetahuan, sikap disiplin, fisik dan mental serta berwawasan kebangsaan agar mampu melaksanakan tugas Tri Dharma Perguruan Tinggi dan menanamkan dasar-dasar kepemimpinan sesuai tujuan pendidikan nasional.
            </li>
            <li>
                Merencanakan, mempersiapkan, dan menyusun seluruh potensi mahasiswa untuk memantapkan ketahanan nasional melalui kegiatan Bela Negara.
            </li>
            <li>
                Menjalin dan membina hubungan kerja sama yang baik dengan berbagai pihak demi tercapainya persatuan dan kesatuan bangsa.
            </li>
        </ul>
    </div>
</section>


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
                        