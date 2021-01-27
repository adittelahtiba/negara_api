const thumbnail = document.querySelector('.thumbnail');

thumbnail.addEventListener('click', (t) => {
    if (t.target.className == 'thumb') {
        document.querySelector('.jumbo').classList.replace('jumbo', 'thumb');
        t.target.classList.replace('thumb', 'jumbo');
        t.target.classList.add('fade');
        setTimeout(() => {
            t.target.classList.remove('fade')
        }, 500);
    }
});