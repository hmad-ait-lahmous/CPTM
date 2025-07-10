document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  const header = document.querySelector('header');

  // Toggle mobile menu
  hamburger.addEventListener('click', function() {
    const isActive = navLinks.classList.toggle('active');
    const headerHeight = header.offsetHeight;
    
    // Toggle body scroll lock
    document.body.classList.toggle('menu-open', isActive);
    
    // Set menu position and height
    if (isActive && window.innerWidth <= 992) {
      navLinks.style.top = `${headerHeight}px`;
      navLinks.style.height = `calc(100vh - ${headerHeight}px)`;
    } else {
      navLinks.style.top = '';
      navLinks.style.height = '';
    }
    
    // Update hamburger icon
    hamburger.innerHTML = isActive 
      ? '<i class="fas fa-times"></i>' 
      : '<i class="fas fa-bars"></i>';
  });

  // Close mobile menu when clicking links without dropdown
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', function(e) {
      const hasDropdown = this.classList.contains('has-dropdown');
      const isMobile = window.innerWidth <= 992;

      // Handle dropdown links in mobile
      if (hasDropdown && isMobile) {
        e.preventDefault();
        const dropdown = this.nextElementSibling;
        if (dropdown) dropdown.classList.toggle('active');
        return;
      }

      // Close menu for regular links in mobile
      if (isMobile) {
        navLinks.classList.remove('active');
        hamburger.innerHTML = '<i class="fas fa-bars"></i>';
        document.body.classList.remove('menu-open');
        
        // Reset inline styles
        navLinks.style.top = '';
        navLinks.style.height = '';
      }
    });
  });

  // Sticky header
  window.addEventListener('scroll', () => {
    header.classList.toggle('sticky', window.scrollY > 100);
  });

  // Reset menu on window resize
  window.addEventListener('resize', function() {
    if (window.innerWidth > 992) {
      navLinks.classList.remove('active');
      hamburger.innerHTML = '<i class="fas fa-bars"></i>';
      document.body.classList.remove('menu-open');
      navLinks.style.top = '';
      navLinks.style.height = '';
      
      // Close all dropdowns
      document.querySelectorAll('.dropdown').forEach(dropdown => {
        dropdown.classList.remove('active');
      });
    }
  });
});