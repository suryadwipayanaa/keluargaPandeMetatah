// navbar jquery aktif bos
$(window).scroll(function(){
    const scroll = $(this).scrollTop();
    if(scroll > $('.show').offset().top -200){
        $('.navbar').addClass('aktif');
    } else {
       $('.navbar').removeClass('aktif');
   }
})
// navbar jquery aktif finished

// mode gelap started
$('.fa-moon').on('click', function(){
    $('body').toggleClass('changeColor')
    $('.fa-moon').addClass('fa-sun')
})
// mode gelap finsihed


// musik started

$(document).ready(function() {
    var audioElement = document.createElement('audio');
    audioElement.setAttribute('src', '../Bali World Music, Gus Teja, Morning Happiness (128 kbps).mp3');
    
    audioElement.addEventListener('ended', function() {
        this.play();
    }, false);
    
    audioElement.addEventListener("canplay",function(){
        $("#length").text("Duration:" + audioElement.duration + " seconds");
        $("#source").text("Source:" + audioElement.src);
    });
    
    audioElement.addEventListener("timeupdate",function(){
        $("#currentTime").text("Current second:" + audioElement.currentTime);
    });

    $('#open').click(function() {
        audioElement.play();
        $('.welcome').hide()
        $('#restart').hide()
    });
    
    $('#pause').click(function() {
        audioElement.pause();
       $('#pause').hide()
       $('#restart').show()
    });
    
    $('#restart').click(function() {
        audioElement.play();
        $('#pause').show()
       $('#restart').hide()
    });
});

// musik finished

$(window).on('load',function(){
    $('.welcome .title').addClass('fade')
})

// time started
const countDate = new Date('oct 6 2022 00:00:00').getTime();

function newYear() {
    const now = new Date().getTime();
    gap = countDate - now;

    const detik = 1000;
    const menit = detik * 60;
    const jam = menit * 60;
    const hari = jam * 24;

    const h = Math.floor(gap / (hari));
    const j = Math.floor((gap % (hari)) / (jam));
    const m = Math.floor((gap % (jam)) / (menit));
    const d = Math.floor((gap % (menit)) / (detik));

    document.getElementById('hari').innerText = h;
    document.getElementById('jam').innerText = j;
    document.getElementById('menit').innerText = m;
    document.getElementById('detik').innerText = d;
}

setInterval(function() {
    newYear();
}, 1000);
// time finished

// jquery all atribut started
$(window).scroll(function(){
    const scroll = $(this).scrollTop();

    if(scroll > $('.content .title').offset().top -300){
        $('.content .title h1').addClass('aktif1');
    } else {
       $('.content .title h1').removeClass('aktif1');
   }
   
    if( scroll > $('.content .peopleName').offset().top -300){
        $('.peopleName ul li').each(function(i){
            setTimeout(function(){
                $('.peopleName ul li').eq(i).addClass('aktif3');
            },200 * (i+1));
        });
    } else {
        $('.peopleName ul li').removeClass('aktif3');
    }

    if(scroll > $('.timePlace').offset().top -300){
        $('.timePlace p').addClass('aktif4');
    } else {
       $('.timePlace p').removeClass('aktif4');
   }

   if(scroll > $('.timePlace').offset().top -250){
        $('.timePlace h1').addClass('aktif5');
    } else {
        $('.timePlace h1').removeClass('aktif5');
    }


    if( scroll > $('.timePlace').offset().top -300){
        $('.timePlace ul li').each(function(i){
            setTimeout(function(){
                $('.timePlace ul li').eq(i).addClass('aktif6');
            },200 * (i+1));
        });
    } else {
        $('.timePlace ul li').removeClass('aktif6');
    }

    if(scroll > $('.protokol').offset().top -300){
        $('.protokol h1').addClass('aktif7');
    } else {
       $('.protokol h1').removeClass('aktif7');
   }


   if(scroll > $('.protokol p').offset().top -250){
        $('.protokol p').addClass('aktif8');
    } else {
        $('.protokol p').removeClass('aktif8');
    }

    if( scroll > $('.protokol .row').offset().top -300){
        $('.protokol .image').each(function(i){
            setTimeout(function(){
                $('.protokol .image').eq(i).addClass('aktif9');
            },200 * (i+1));
        });
    } else {
        $('.protokol .image').removeClass('aktif9');
    }
})
// jquery all atribut finsihed

