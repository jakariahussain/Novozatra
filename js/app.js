// Data-background js
$("[data-background]").each(function () {
    $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})

/*=============================== imgages-gallery ===============================*/

$('.gallery-item-thumb').magnificPopup({
    type: 'image',
    gallery: {
        enabled: true
    }
});
/*=============================== video-gallery ===============================*/
$('.video-opens').magnificPopup({
    type: 'iframe',
});

// nice-select
$('select').niceSelect();

//  offer-timing-count
let Days = document.getElementById('Days')
let Hours = document.getElementById('Hours')
let Min = document.getElementById('Min')
let Second = document.getElementById('Second')

let countDate = new Date('Jan 1, 2021 00:00:00').getTime();

function newYear() {
    let now = new Date().getTime();
    gap = countDate - now;
    let second = 1000
    let minute = second * 60;
    let hour = minute * 60;
    let day = hour * 24;

    let d = Math.floor(gap / (day));
    let h = Math.floor((gap % (day)) / (hour));
    let m = Math.floor((gap % (hour)) / (minute));
    let s = Math.floor((gap % (minute)) / second)

    Days.innerText = d;
    Hours.innerText = h;
    Min.innerText = m;
    Second.innerText = s;
}
setInterval(function () {
    newYear();
}, 1000);

// product-banner
$('.product-banner .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    animateOut: 'fadeOut',
    dots: true,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// customer-slide
$('#customer-cr .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    animateOut: 'fadeOut',
    dots: false,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        },
    },
});

// top-categories-area
$('.top-categories-area .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    animateOut: 'fadeOut',
    dots: true,
    autoplay: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 6
        }
    }
});

// hot-deals-slider
$('.hot-deal-wrapper .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// top-seller-wrapp
$('.top-seller-wrapp .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        900: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
// populer-brand-area
$('.populer-brand-area .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
});

// populer-brand-area
$('.weekly-vendors-area .owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: false,
    dots: true,
    autoplay: false,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});

// clients-slider
$('.our-clients .owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 6
        }
    }
});


// Footer-current-year
var currntYear = new Date();
document.getElementById("years").innerHTML = currntYear.getFullYear();


//Menu-bar active script
const currentLocation = location.href;
const menuItem = document.querySelectorAll('.primary-menu nav li a')
const menuLength = menuItem.length
for(let i = 0; i<menuItem.length; i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = 'active-menu'
    }
}




