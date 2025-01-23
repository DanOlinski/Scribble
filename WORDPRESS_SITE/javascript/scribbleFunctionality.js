
var canvas, ctx, flag = false,
    prevX = 0,
    currX = 0,
    prevY = 0,
    currY = 0,
    dot_flag = false;


//default chalk color
var x = "rgba(255, 255, 255, 0.70)",
    y = 8;


function init() {
    canvas = document.getElementById('can');
    ctx = canvas.getContext("2d");
    //this is what set's the boundaries for the chalk to draw on, that's why you need HTML attributes of width and height otherwise these values can't know the boundaries for where you can draw on
    w = canvas.width;
    h = canvas.height;

    canvas.addEventListener("pointermove", function (e) {
        findxy('move', e)
    }, false);
    canvas.addEventListener("pointerdown", function (e) {
        findxy('down', e)
    }, false);
    canvas.addEventListener("pointerup", function (e) {
        findxy('up', e)
    }, false);
    canvas.addEventListener("pointerout", function (e) {
        findxy('out', e)
    }, false);
}

function color(obj) {
    switch (obj.id) {
        case "green":
            x = "rgba(64, 230, 64, 0.785)";
            break;
        case "blue":
            x = "rgba(0, 0, 255, 0.70)";
            break;
        case "red":
            x = "rgba(255, 0, 0, 0.70)";
            break;
        case "yellow":
            x = "rgba(248, 255, 41, 0.845)";
            break;
        case "purple":
            x = "#f170e7c4";
            break;
        case "white":
            x = "rgba(255, 255, 255, 0.70)";
            break;
    }
    if (x == "white") y = 14;
    else y = 8;
}

function draw() {
    ctx.beginPath();
    ctx.moveTo(prevX, prevY);
    ctx.lineTo(currX, currY);
    ctx.strokeStyle = x;
    ctx.lineWidth = y;
    ctx.stroke();
    ctx.closePath();
}

function erase() {
    ctx.clearRect(0, 0, w, h);
    document.getElementById("canvasimg").style.display = "none";
}

function findxy(res, e) {
    if (res == 'down') {
        prevX = currX;
        prevY = currY;
        currX = e.clientX - canvas.offsetLeft;
        currY = e.clientY - canvas.offsetTop;

        flag = true;
        dot_flag = true;
        
        if (dot_flag) {
            ctx.beginPath();
            ctx.fillStyle = x;
            ctx.fillRect(currX, currY, 2, 2);
            ctx.closePath();
            dot_flag = false;
        }
    }
    
    if (res == 'up' || res == "out") {
        flag = false;
    }
    
    if (res == 'move') {
        if (flag) {
            prevX = currX;
            prevY = currY;
            currX = e.clientX - canvas.offsetLeft;
            currY = e.clientY - canvas.offsetTop;
            draw();
        }
    }





}

