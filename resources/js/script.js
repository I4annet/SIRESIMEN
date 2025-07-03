/*
This code is temporarily stored until 
is is needed :D
*/

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