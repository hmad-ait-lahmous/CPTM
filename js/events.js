document.addEventListener('DOMContentLoaded', function() {
    // Hero Slider Functionality
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    let slideInterval;
    
    function showSlide(index) {
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Add active class to current slide and dot
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }
    
    function nextSlide() {
        let nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }
    
    // Start auto sliding
    function startSlider() {
        slideInterval = setInterval(nextSlide, 5000);
    }
    
    // Initialize slider
    if (slides.length > 0) {
        showSlide(0);
        startSlider();
    }
    
    // Dot click event
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            clearInterval(slideInterval);
            showSlide(index);
            startSlider();
        });
    });
    
    // Event Info Toggle
    const showMoreBtns = document.querySelectorAll('.show-more-btn');
    
    showMoreBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const eventCard = this.closest('.event-card');
            const eventInfo = eventCard.querySelector('.event-info');
            const isActive = eventInfo.classList.contains('active');
            
            // Close all other info panels
            document.querySelectorAll('.event-info').forEach(info => {
                info.classList.remove('active');
            });
            
            // Reset all buttons
            document.querySelectorAll('.show-more-btn').forEach(button => {
                button.textContent = 'Voir plus';
            });
            
            // Toggle current panel
            if (!isActive) {
                eventInfo.classList.add('active');
                this.textContent = 'Voir moins';
            } else {
                eventInfo.classList.remove('active');
                this.textContent = 'Voir plus';
            }
        });
    });
});