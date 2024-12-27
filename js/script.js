// Image Change Start
let videoBtns = document.querySelectorAll('.vid-btn');

videoBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        console.log(src);
        document.querySelector('#video-slider').src = src;
    })
});
// Image Change End





