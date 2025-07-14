document.addEventListener('DOMContentLoaded', function() {
            
            // Hero slider controls
            const vidBtns = document.querySelectorAll('.vid-btn');
            const heroSection = document.querySelector('.hero');
            
            if (vidBtns.length && heroSection) {
                let currentIndex = 0;
                let autoSlideInterval;
                
                const changeSlide = (index) => {
                    vidBtns.forEach(btn => btn.classList.remove('active'));
                    vidBtns[index].classList.add('active');
                    const src = vidBtns[index].getAttribute('data-src');
                    heroSection.style.backgroundImage = 
                        `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('${src}')`;
                    currentIndex = index;
                };
                
                const startAutoSlide = () => {
                    autoSlideInterval = setInterval(() => {
                        const nextIndex = (currentIndex + 1) % vidBtns.length;
                        changeSlide(nextIndex);
                    }, 5000);
                };
                
                vidBtns.forEach((btn, index) => {
                    btn.addEventListener('click', (e) => {
                        e.preventDefault();
                        clearInterval(autoSlideInterval);
                        changeSlide(index);
                        startAutoSlide();
                    });
                });
                
                startAutoSlide();
            }
            
            // Smooth scrolling for anchor links
          document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                // Empêcher le scroll uniquement si l'ancre est valide
                if (href.length > 1) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });

            
            // Sticky header
            window.addEventListener('scroll', () => {
                const header = document.querySelector('header');
                if (header) {
                    header.classList.toggle('sticky', window.scrollY > 100);
                }
            });
            
            // Active link highlighting
            window.addEventListener('scroll', () => {
                const sections = document.querySelectorAll('section');
                const navLinks = document.querySelectorAll('.nav-links a');
                
                let currentSection = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (window.pageYOffset >= (sectionTop - sectionHeight / 3)) {
                        currentSection = section.getAttribute('id');
                    }
                });
                    
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').substring(1) === currentSection) {
                        link.classList.add('active');
                    }
                });
            });
        });