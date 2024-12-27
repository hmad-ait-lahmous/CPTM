const onboardingContainer = document.querySelector(".onboarding-container");
const onboardingOverlay = document.querySelector(".onboarding-overlay");
const skipBtn = document.querySelector(".onboarding-container .skip-btn");
const nextBtn = document.querySelector(".onboarding-container .next-btn");

const init = () => {
    onboardingContainer.classList.add("active");
    onboardingOverlay.classList.add("active");
};

const hideOnboarding = () => {
    onboardingContainer.classList.remove("active");
    onboardingOverlay.classList.remove("active");
    onboardingContainer.style.display = "none"; // Hide the pop-out completely
};

skipBtn.addEventListener("click", () => {
    hideOnboarding();
});

nextBtn.addEventListener("click", () => {
    hideOnboarding();
});

// Automatically show pop-out after 5 seconds if not shown before
window.addEventListener("load", () => {
    if (!sessionStorage.getItem('onboardingShown')) {
        setTimeout(() => {
            init();
        }, 2000); // 5 seconds = 5000 milliseconds
    }
});