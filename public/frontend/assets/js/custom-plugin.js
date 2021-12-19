const imgs = document.querySelectorAll('.t-img')
imgs.forEach(img => {
    img.addEventListener('click', (e) => {

        imgs.forEach(img => img.classList.remove("t-active"))

        e.target.className = 't-active';

        document.querySelector('.t-text').innerHTML = e.target.dataset.text
        document.querySelector('.t-name').innerHTML = e.target.dataset.name
        let star = '';

        for (let i = 1; i <= e.target.dataset.star; i++) {
            star += '<i class="fas fa-star"></i>'
        }
        document.querySelector('.t-star').innerHTML = star;

    })
})