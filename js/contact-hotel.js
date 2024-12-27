//hotel Show more and Show less
document.addEventListener('DOMContentLoaded', function () {
    const showMoreBtns = document.querySelectorAll('.show-more-btn');

    showMoreBtns.forEach(button => {
        button.addEventListener('click', function () {
            const hotelContent = button.closest('.hotel1');
            const moreInfo = hotelContent.querySelector('.more-info');

            if (moreInfo) {
                moreInfo.style.display = (moreInfo.style.display === 'none') ? 'block' : 'none';
            }

            // Toggle the button text between "show more" and "show less"
            button.textContent = (button.textContent === 'show more') ? 'show less' : 'show more';
        });
    });
});