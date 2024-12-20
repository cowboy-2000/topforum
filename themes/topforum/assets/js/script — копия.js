$(function() {
  $('#slides1').slidesjs({
    play: {
      active: false,
      auto: false,
      interval: 4000,
      swap: true
    },
    navigation: {
      active: true
    },
    pagination: false
  });
});
$(document).ready(function(){
    var carousel = $("#carousel1");
    carousel.owlCarousel({
        nav: true,
        loop: true,
        navText: ['<img src="http://topforum/wp-content/themes/topforum/assets/images/01_index_05 (2).png" alt="">','<img src="http://topforum/wp-content/themes/topforum/assets/images/01_index_06.png" alt="">'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            }
        },
        mouseDrag: false,
        margin: 47,
        dots: false
    });
});
$(document).ready(function(){
    var carousel = $("#carousel2");
    carousel.owlCarousel({
        nav: true,
        loop: true,
        navText: ['<img src="http://topforum/wp-content/themes/topforum/assets/images/01_index_05 (2).png" alt="">','<img src="http://topforum/wp-content/themes/topforum/assets/images/01_index_06.png" alt="">'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 6
            }
        },
        mouseDrag: false,
        margin: 24,
        dots: false
    });
});
let body = () => {
const slidesjsprevious1 = document.querySelector('#slides1 .slidesjs-previous');
slidesjsprevious1.innerHTML = '';
const img1 = document.createElement('img');
img1.src = 'http://topforum/wp-content/themes/topforum/assets/images/slidesjs-previous-1.png';
img1.alt = '';
slidesjsprevious1.appendChild(img1);
const slidesjsnext1 = document.querySelector('#slides1 .slidesjs-next');
slidesjsnext1.innerHTML = '';
const img2 = document.createElement('img');
img2.src = 'http://topforum/wp-content/themes/topforum/assets/images/slidesjs-next-1.png';
img2.alt = '';
slidesjsnext1.appendChild(img2);
}
const slides1 = document.getElementById('slides1');
const conferensions = document.querySelectorAll('#slides1 .conferension');
for (let conferension of conferensions) {
    conferension.style.minHeight = getComputedStyle(slides1).height;
}
var vid, playbtn, seekslider, curtimetext, durtimetext;
function intializePlayer() {
    vid = document.getElementById("my_video");
    playbtn = document.getElementById("playpausebtn");
    seekslider = document.getElementById("seekslider");
    curtimetext = document.getElementById("curtimetext");
    durtimetext = document.getElementById("durtimetext");
    playbtn.addEventListener("click", playPause, false);
    seekslider.addEventListener("change", vidSeek, false);
    vid.addEventListener("timeupdate", seektimeupdate, false);
}
window.onload = intializePlayer;
function playPause() {
    if(vid.paused) {
        vid.play();
        playbtn.innerHTML = "Pause";
    }
    else {
        vid.pause();
        playbtn.innerHTML = "Play";
    }
}
function vidSeek() {
    var seekto = vid.duration * (seekslider.value / 100);
    vid.currentTime = seekto;
}
function seektimeupdate() {
    var nt = vid.currentTime * (100 / vid.duration);
    seekslider.value = nt;
    var curmins = Math.floor(vid.currentTime / 60);
    var cursecs = Math.floor(vid.currentTime - curmins * 60);
    var durmins = Math.floor(vid.duration / 60);
    var dursecs = Math.floor(vid.duration - durmins * 60);
    if (cursecs < 10) { cursecs = "0" + cursecs; }
    if (dursecs < 10) { dursecs = "0" + dursecs; }
    if (curmins < 10) { curmins = "0" + curmins; }
    if (durmins < 10) { durmins = "0" + durmins; }
    curtimetext.innerHTML = curmins + ":" + cursecs;
    durtimetext.innerHTML = durmins + ":" + dursecs; 
}



