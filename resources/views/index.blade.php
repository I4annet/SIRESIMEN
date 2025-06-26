<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satmenwa 874 - Politeknik Negeri Malang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />
    <style>
        body {
            @apply bg-gradient-to-br from-[#4B0082] to-[#556B2F] min-h-screen text-white overflow-x-hidden;
        }

        .gradient-text {
            @apply bg-clip-text text-transparent bg-gradient-to-r from-[#FFD700] to-[#FFFFFF];
        }

        .card {
            @apply bg-white/10 backdrop-blur-lg rounded-2xl border border-[#FFD700]/20 p-8 transition-all duration-300 hover:shadow-2xl hover:shadow-[#FFD700]/20;
        }

        .btn-primary {
            @apply bg-[#FFFFFF] text-[#4B0082] font-semibold px-8 py-3 rounded-full hover:bg-opacity-90 transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg;
        }

        .btn-outline {
            @apply border-2 border-[#FFD700] text-[#FFFFFF] font-medium px-8 py-3 rounded-full hover:bg-[#FFD700] hover:bg-opacity-10 transition-all duration-300 transform hover:-translate-y-0.5;
        }

        .feature-icon {
            @apply w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center text-2xl mb-6 mx-auto;
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-image: linear-gradient(to right top, #4B0082, #556B2F);
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            padding: 20px 0;
            backdrop-filter: blur(10px);
            background: rgba(47, 79, 79, 0.5);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4B0082;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 10px 15px;
            border-radius: 25px;
        }

        .nav-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .login-btn {
            background: white;
            color: #4B0082;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        /* Hero Section */
        .hero {
            padding: 120px 0 80px;
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #FFD700, #FFFFFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s both;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.4s both;
        }

        .btn {
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: white;
            color: #4B0082;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #4B0082;
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .features h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            animation: fadeInUp 1s ease;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.2);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #4B0082;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .feature-card p {
            opacity: 0.9;
            line-height: 1.6;
        }

        /* Statistics Section */
        .stats {
            padding: 80px 0;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .stat-item {
            animation: fadeInUp 1s ease;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #FFD700, #FFFFFF);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Footer */
        footer {
            background: rgba(47, 79, 79, 0.5);
            padding: 40px 0;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }

        .decoration {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 8s ease-in-out infinite;
        }

        .decoration:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .decoration:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .decoration:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }
    </style>
</head>
<body>
    <div class="gradient-bg">
        <header class="fixed top-0 w-full p-4 bg-[#2F4F4F] border-b border-[#FFD700] z-50 transition-all duration-300" id="header">
            <nav class="flex justify-between items-center max-w-screen-xl mx-auto">
                <div class="flex items-center gap-3 text-white font-bold text-2xl">
                    <div class="logo-icon w-10 h-10 bg-gradient-to-br from-[#4B0082] to-[#556B2F] rounded-full flex items-center justify-center">🔫</div>
                    <span>Satmenwa 874</span>
                </div>
                <ul class="nav-links hidden md:flex gap-8 list-none">
                    <li><a href="#beranda" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Beranda</a></li>
                    <li><a href="#tentang" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Tentang</a></li>
                    <li><a href="#kegiatan" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Kegiatan</a></li>
                    <li><a href="#kontak" class="text-white text-lg font-medium hover:-translate-y-0.5 relative">Kontak</a></li>
                </ul>
            </nav>
        </header>

        <section class="relative flex items-center justify-center min-h-screen pt-24 pb-8 text-center bg-[#2F4F4F]" id="beranda">
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

        {{-- <section class="features py-20 px-8 bg-[#4B0082]" id="tentang">
            <div class="features-container max-w-screen-xl mx-auto text-center">
                <h2 class="text-4xl text-white mb-12 font-bold">Mengapa Memilih Platform Kami?</h2>
                <div class="features-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-[#FFD700] border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#FFD700] to-[#4B0082] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🤖</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Rekomendasi Cerdas</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Algoritma AI canggih yang menganalisis profil, minat, dan keahlian Anda untuk memberikan rekomendasi magang yang paling sesuai.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-[#FFD700] border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#FFD700] to-[#4B0082] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🏢</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Partner Terpercaya</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Bermitra dengan perusahaan-perusahaan terkemuka yang menawarkan program magang berkualitas tinggi.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-[#FFD700] border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#FFD700] to-[#4B0082] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">📊</div>
                         <h3 class="text-2xl text-white mb-4 font-semibold">Analisis Komprehensif</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Dapatkan wawasan mendalam tentang tren industri, persyaratan keahlian, dan peluang karir di bidang pilihan Anda.</p>
                    </div>   
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-white border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#f093fb] to-[#f5576c] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🎯</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Matching Akurat</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Sistem pencocokan canggih yang mempertimbangkan lokasi, jadwal, dan preferensi pribadi Anda.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-white border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#f093fb] to-[#f5576c] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">📱</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Interface Modern</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Antarmuka yang intuitif dan responsif, memudahkan Anda mengakses platform dari berbagai perangkat.</p>
                    </div>
                    <div class="feature-card bg-white bg-opacity-10 backdrop-blur-xl rounded-3xl p-10 border border-white border-opacity-20 transition-all duration-300 relative overflow-hidden hover:-translate-y-2 hover:shadow-2xl hover:shadow-black/20">
                        <div class="feature-icon w-20 h-20 bg-gradient-to-br from-[#f093fb] to-[#f5576c] rounded-full mx-auto mb-6 flex items-center justify-center text-4xl">🚀</div>
                        <h3 class="text-2xl text-white mb-4 font-semibold">Dukungan Karir</h3>
                        <p class="text-white text-opacity-80 leading-relaxed">Bimbingan dan dukungan penuh dari tim ahli untuk memaksimalkan pengalaman magang Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats py-16 px-8 bg-gradient-to-r from-[#556B2F] to-[#4B0082]">
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
        </section> --}}

        <footer class="footer py-12 px-8 bg-[#2F4F4F] text-center text-white border-t border-[#FFD700]" id="kontak">
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
                <p>&copy; 2025 Satuan Resimen Mahasiswa 874. Semua hak dilindungi.</p>
            </div>
        </footer>
    </div>



    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header background on scroll
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.remove('bg-opacity-10', 'border-opacity-20');
                header.classList.add('bg-opacity-20', 'border-opacity-30');
            } else {
                header.classList.remove('bg-opacity-20', 'border-opacity-30');
                header.classList.add('bg-opacity-10', 'border-opacity-20');
            }
        });

        // Animate stats on scroll
        const animateStats = () => {
            const stats = document.querySelectorAll('.stat-number');
            stats.forEach(stat => {
                const rect = stat.getBoundingClientRect();
                // Check if the element is in the viewport
                if (rect.top < window.innerHeight && rect.bottom > 0 && !stat.dataset.animated) {
                    const finalValue = stat.textContent;
                    let currentValue = 0;
                    const isPercentage = finalValue.includes('%');
                    const isStar = finalValue.includes('★');
                    const cleanFinalValue = parseInt(finalValue.replace(/[^0-9.]/g, ''));
                    const increment = isPercentage ? cleanFinalValue / 50 : cleanFinalValue / 50; // Adjust for smoother animation
                    
                    stat.dataset.animated = 'true'; // Mark as animated

                    let count = 0;
                    const timer = setInterval(() => {
                        count += 1;
                        currentValue = Math.round(increment * count);
                        if (currentValue >= cleanFinalValue) {
                            stat.textContent = finalValue;
                            clearInterval(timer);
                        } else {
                            stat.textContent = currentValue + (isPercentage ? '%' : isStar ? '★' : '+');
                        }
                    }, 20); // Faster interval for smoother count
                }
            });
        };

        window.addEventListener('scroll', animateStats);
    
        window.addEventListener('load', animateStats);

        // Parallax effect for floating elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.floating-element');
            const speed = 0.5;

            parallaxElements.forEach((element, index) => {
                // Adjust speed slightly for different elements for more dynamic movement
                const currentSpeed = speed * (1 + (index * 0.1));
                const yPos = -(scrolled * currentSpeed);
                const rotateDeg = scrolled * 0.05 * (index % 2 === 0 ? 1 : -1); // Rotate in opposite directions
                element.style.transform = translateY(${yPos}px) rotate(${rotateDeg}deg);
            });
        });
    </script>
</body>
</html>
                        