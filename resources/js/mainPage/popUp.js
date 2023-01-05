const buttonsOfPopUps = Array.from(document.getElementsByClassName('button-pop-up'));

buttonsOfPopUps.forEach((button) => {
    button.onclick = (e) => {
        e.preventDefault();
        const idName = 'pop-up-' + e.currentTarget.id;
        const popUp = document.getElementById(idName);
        popUp.classList.add('pop-up-active');
        const closeButton = popUp.querySelector('#close-first');
        closeButton.onclick = (e) => {
            e.preventDefault();
            popUp.classList.remove('pop-up-active');
        }
    }
})