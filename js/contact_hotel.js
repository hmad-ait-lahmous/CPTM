
// JavaScript pour le slider
document.addEventListener('DOMContentLoaded', function() {
    // Slider Hero
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.slider-dot');
    let currentSlide = 0;
    
    function showSlide(index) {
        // Masquer toutes les slides
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Afficher la slide sélectionnée
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }
    
    // Gestion des clics sur les points
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });
    
    // Changement automatique des slides
    function nextSlide() {
        let nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }
    
    // Changer de slide toutes les 5 secondes
    setInterval(nextSlide, 5000);
    
    // JavaScript pour les boutons "Voir plus"
    const showMoreBtns = document.querySelectorAll('.show-more-btn');
    
    showMoreBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const moreInfo = this.closest('.hotel-card').querySelector('.more-info');
            const isActive = moreInfo.classList.contains('active');
            
            // Fermer tous les autres panneaux d'information
            document.querySelectorAll('.more-info').forEach(info => {
                info.classList.remove('active');
            });
            
            // Réinitialiser tous les boutons
            document.querySelectorAll('.show-more-btn').forEach(button => {
                button.textContent = 'Voir plus';
            });
            
            if (!isActive) {
                // Ouvrir ce panneau
                moreInfo.classList.add('active');
                this.textContent = 'Voir moins';
            }
        });
    });
});
