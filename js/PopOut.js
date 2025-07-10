// js/popup.js
document.addEventListener('DOMContentLoaded', function() {
  const overlay = document.querySelector('.onboarding-overlay');
  const container = document.querySelector('.onboarding-container');
  
  // Show popup after 3 seconds
  setTimeout(() => {
    overlay.classList.add('active');
    container.classList.add('active');
  }, 3000);
  
  // Close popup
  document.querySelector('.skip-btn').addEventListener('click', () => {
    closePopup();
  });
  
  // Also close when clicking on overlay
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      closePopup();
    }
  });
  
  function closePopup() {
    overlay.classList.remove('active');
    container.classList.remove('active');
    
    // Remove event listeners after closing
    overlay.removeEventListener('click', closePopup);
  }
});