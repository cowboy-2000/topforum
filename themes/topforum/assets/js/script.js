const selectHeaders = document.getElementsByClassName('select__header');
const selectItems = document.getElementsByClassName('select__item');
const itcSlider = document.querySelector('.itc-slider');
const navbarSupportedContent = document.getElementById('navbarSupportedContent');
const navbarToggler = document.querySelector('.navbar-toggler');
const for_select_items = document.querySelectorAll('.for_select > span');
const template_url = "http://topforum/wp-content/themes/topforum";
let volume = "100";
let my_video, playpausebtn, playpause, playpauseicon, seekslider, remaining_timetext, mutebtn, volumeslider_block, volumeslider, fullscreenbtn;
const intializePlayer = () => {
    if (window.location.pathname === '/') {
        my_video = document.getElementById("my_video");
        playpausebtn = document.getElementById("playpausebtn");
        playpause = document.getElementById("playpause");
        playpauseicon = document.getElementById("playpauseicon");
        seekslider = document.getElementById("seekslider");
        remaining_timetext = document.getElementById("remaining_timetext");
        mutebtn = document.getElementById('mutebtn');
        volumeslider_block = document.getElementById('volumeslider_block');
        volumeslider = document.getElementById('volumeslider');
        fullscreenbtn = document.getElementById('fullscreenbtn');
        playpausebtn.addEventListener("click", playPause, false);
        playpause.addEventListener("click", playPause, false);
        seekslider.addEventListener("change", vidSeek, false);
        my_video.addEventListener("timeupdate", seektimeupdate, false);
        mutebtn.addEventListener("click", vidmute, false);
        mutebtn.addEventListener("mouseover", () => {
            volumeslider_block.style.display = 'block';
        });
        mutebtn.addEventListener("mouseout", () => {
            volumeslider_block.style.display = 'none';
        });
        volumeslider_block.addEventListener("mouseover", () => {
            volumeslider_block.style.display = 'block';
        });
        volumeslider_block.addEventListener("mouseout", () => {
            volumeslider_block.style.display = 'none';
        });
        volumeslider.addEventListener("change", setvolume, false);
        fullscreenbtn.addEventListener("click", toggleFullScreen, false);
        const durmins = Math.floor(my_video.duration / 60);
        let dursecs = Math.floor(my_video.duration - durmins * 60);
        if (dursecs < 10) {
            dursecs = "0" + dursecs;
        }
        remaining_timetext.innerHTML = durmins + ":" + dursecs;
        seekslider.value = "0";
    }
}
const display_none = () => {
    playpause.style.display = 'none';
}
const display_block = () => {
    playpause.style.display = 'block';
}
const handlePaused = () => {
    my_video.pause();
    playpausebtn.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_18.png")';
    playpauseicon.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_15.png")';
    display_block();
    playpause.removeEventListener("mouseover", display_block);
    my_video.removeEventListener("mouseout", display_none);
    my_video.removeEventListener("mouseover", display_block);
}
const playPause = () => {
    if (my_video.paused) {
        my_video.play();
        playpausebtn.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_22.png")';
        playpauseicon.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_21.png")';
        display_none();
        my_video.addEventListener("mouseout", display_none);
        my_video.addEventListener("mouseover", display_block);
        playpause.addEventListener("mouseover", display_block);
    }
    else {
        handlePaused();
    }
}
const vidSeek = () => {
    my_video.currentTime = my_video.duration * (seekslider.value / 100);
}
const toggleFullScreen = () => {
    if (my_video.requestFullScreen) {
        my_video.requestFullScreen();
    }
    else if (my_video.webkitRequestFullScreen) {
        my_video.webkitRequestFullScreen();
    }
    else if (my_video.mozRequestFullScreen) {
        my_video.mozRequestFullScreen();
    }
}
const seektimeupdate = () => {
    seekslider.value = my_video.currentTime * (100 / my_video.duration);
    const remainder = my_video.duration - my_video.currentTime;
    const curmins = Math.floor(remainder / 60);
    let cursecs = Math.floor(remainder - curmins * 60);
    if (cursecs < 10) {
        cursecs = "0" + cursecs;
    }
    remaining_timetext.innerHTML = curmins + ":" + cursecs;
    if (seekslider.value == "100") {
        handlePaused();
    }
}
const vidmute = () => {
    if (my_video.muted) {
        my_video.muted = false;
        mutebtn.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_17.png")';
        volumeslider.value = volume;
        volume = volumeslider.value;
    }
    else {
        my_video.muted = true;
        mutebtn.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_23.png")';
        volume = volumeslider.value;
        volumeslider.value = "0";
    }
}
const setvolume = () => {
    my_video.volume = volumeslider.value / 100;
    if (volumeslider.value != "0") {
        if (getComputedStyle(mutebtn).backgroundImage == 'url("' + template_url + '/assets/images/01_index_23.png")') {
            mutebtn.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_17.png")';
            my_video.muted = false;
        }
        volume = volumeslider.value;
    }
    else {
        mutebtn.style.backgroundImage = 'url("' + template_url + '/assets/images/01_index_23.png")';
        my_video.muted = true;
    }
}
for (let selectHeader of selectHeaders) {
    selectHeader.addEventListener('click', () => {
        selectHeader.parentNode.classList.toggle('select--is-active');
    });
}
for (let selectItem of selectItems) {
    selectItem.addEventListener('click', () => {
        const select = selectItem.closest('.select');
        const selectCurrent = select.querySelector('.select__current');
        selectCurrent.innerHTML = selectItem.innerHTML;
        select.classList.remove('select--is-active');
    });
}
$(document).ready(function() {
    $().UItoTop({ easingType: 'easeOutQuart' });
});
$(document).ready(() => {
    const carousel = $("#carousel1");
    carousel.owlCarousel({
        nav: true,
        loop: true,
        navText: ['<img src="' + template_url + '/assets/images/01_index_12.png" alt="">','<img src="' + template_url + '/assets/images/01_index_13.png" alt="">'],
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2
            }
        },
        mouseDrag: false,
        margin: 47,
        dots: false
    });
});
$(document).ready(() => {
    const carousel = $("#carousel2");
    carousel.owlCarousel({
        nav: true,
        loop: true,
        navText: ['<img src="' + template_url + '/assets/images/01_index_12.png" alt="">','<img src="' + template_url + '/assets/images/01_index_13.png" alt="">'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        },
        mouseDrag: false,
        margin: 14,
        dots: false
    });
});
navbarToggler.addEventListener('click', () => {
    navbarSupportedContent.classList.toggle('collapsed');
});
for (let for_select_item of for_select_items) {
    for_select_item.addEventListener('click', () => {
        for (let for_select_item_current of for_select_item.parentNode.children) {
            for_select_item_current.classList.remove('selected');
        }
        for_select_item.classList.add('selected');
    });
}