// payment button


        document.addEventListener('DOMContentLoaded', () => {
        let tapBoxes = document.querySelectorAll('.tap-box');

        tapBoxes.forEach(box => {
            box.addEventListener('click', () => {

                box.classList.toggle('bg-orange-400');
            });
        });
        });
