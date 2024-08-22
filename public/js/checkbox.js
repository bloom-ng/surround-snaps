
        document.addEventListener('DOMContentLoaded', () => {
        let boxes = document.querySelectorAll('.package-box');
    
        boxes.forEach(box => {
            box.addEventListener('click', () => {

                boxes.forEach(b => b.classList.remove('border-[#F4845F]'));
            
            box.classList.add('border-[#F4845F]');
            });
        });
        });
