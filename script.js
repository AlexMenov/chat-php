document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('form');
    button.addEventListener('click', (e) => {
        e.preventDefault();
        if (document.body.style.backgroundColor === 'gray') {
            document.body.style.backgroundColor = 'tomato';
        } else {
            document.body.style.backgroundColor = 'gray';
        }
    });
})