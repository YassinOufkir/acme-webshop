
var trailLength = 6;
var path = "img/Single-Bullet-icon.png";
var icon = "ak-47-cursor.png";

var standardbody=(document.compatMode=="CSS1Compat")? document.documentElement : document.body; 
var i,d = 0;

function initTrail() { 
    images = new Array() 
    for (i = 0; i < parseInt(trailLength); i++) {
        images[i] = new Image();
        images[i].src = path
    }
    storage = new Array() 
    for (i = 0; i < images.length*3; i++) {
        storage[i] = 0
    }
    for (i = 0; i < images.length; i++) { 
        document.write('<div id="obj' + i + '" style="position: absolute; z-Index: 100; height: 0; width: 0"><img src="' + images[i].src + '"></div>')
    }
    trail()
}
function trail() { 
    for (i = 0; i < images.length; i++) { 
        document.getElementById("obj" + i).style.top = storage[d]+'px';
        document.getElementById("obj" + i).style.left = + storage[d+1]+'px'; 
        d = d+2
    }
    for (i = storage.length; i >= 2; i--) { 
        storage[i] = storage[i-2]
    }
    d = 0;// reset for future use
    var timer = setTimeout("trail()",6); 
}
function processEvent(e) { 
    if (window.event) { // for IE
        storage[0] = window.event.y+standardbody.scrollTop+10;
        storage[1] = window.event.x+standardbody.scrollLeft+10
    } else {
        storage[0] = e.pageY+12;
        storage[1] = e.pageX+12
    }
}

initTrail();
document.onmousemove = processEvent;    






