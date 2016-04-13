var scrollWaarde;
var laatstePositie = 0;
var naviMenu = $('nav');
var menuhoogte = naviMenu.outerHeight();

function verschuifMenu(){
    scrollWaarde= $(this).scrollTop();
    if(scrollWaarde>laatstePositie){
        //scrollen naar beneden
        console.log('We scrollin`');
            laatstePositie=scrollWaarde;
        naviMenu.css('top', -menuhoogte + 'px')
    } else {
        //still scrollin
        console.log('haal het menu');
        laatstePositie = scrollWaarde;
        naviMenu.css('top', 0)
    }

}

$(window).on('scroll', verschuifMenu);
