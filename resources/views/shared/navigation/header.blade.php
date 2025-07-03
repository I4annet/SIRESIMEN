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