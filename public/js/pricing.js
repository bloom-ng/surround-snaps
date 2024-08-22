
    let pricing = document.getElementById('pricingLink');


    pricing.addEventListener('click', function() {

    document.querySelectorAll('.flex a').forEach(function(link) {
        link.classList.remove('text-[#1b998b]');
    });

    this.classList.add('text-[#1b998b]');
    });



       // about-link

    let about = document.getElementById('aboutLink');


    aboutLink.addEventListener('click', function() {

    document.querySelectorAll('.flex a').forEach(function(link) {
        link.classList.remove('text-[#1b998b]');
    });

    this.classList.add('text-[#1b998b]');
    });
