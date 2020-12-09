// Timer label
var lbl = document.createElement("label");
lbl.setAttribute("Id", "timer");
var lbltxt = document.createTextNode("Timer: ");
lbl.appendChild(lbltxt);

// p diveider
var p = document.createElement("p");

//START Button
var startbtn = document.createElement("button");
startbtn.setAttribute("onclick", "start()");
startbtn.setAttribute("Id", "startbtn");
var startbtntxt = document.createTextNode(" START ");
startbtn.appendChild(startbtntxt);

//RESET Button
var resetbtn = document.createElement("button");
resetbtn.setAttribute("onclick", "reset()");
resetbtn.setAttribute("Id", "resetbtn");
var resetbtntxt = document.createTextNode(" RESET ");
resetbtn.appendChild(resetbtntxt);

//LAP Button
var lapbtn = document.createElement("button");
lapbtn.setAttribute("onclick", "newLap()");
var lapbtntxt = document.createTextNode(" LAP ");
lapbtn.appendChild(lapbtntxt);

//div for LAPs
var lapssect = document.createElement("section");
lapssect.setAttribute("Id", "lapssection");


document.body.appendChild(lbl);
document.body.appendChild(p);
document.body.appendChild(startbtn);
document.body.appendChild(lapbtn);
document.body.appendChild(resetbtn);
var p = document.createElement("p");
document.body.appendChild(p);
document.body.appendChild(lapssect);


var m = 0; // minute
var s = 0; // second
var ms = 0; // millisecond
var newlap = 1;
var started = false;
var interval;

function timer() {
    document.getElementById("timer").innerHTML = m + ":" + s + ":" + ms / 10;
    ms += 10;

    if (m.length < 2) {
        m = '0' + m;
      }
      
    if (ms == 1000) {
        s += 1;
        ms = 0;
    }

    if (s == 60) {
        m += 1;
        s = 0;
    }
}

function newLap() {
    if (started == true) {
        var laplbl = document.createElement("label");
        laplbl.setAttribute("class", "lap");
        var laplbltxt = document.createTextNode("LAP" + newlap + " - " + m + ":" + s + ":" + ms / 10);
        laplbl.appendChild(laplbltxt);

        // lap diveider
        var lp = document.createElement("p");
        lapssect.appendChild(lp);
        lapssect.appendChild(laplbl);
        newlap += 1;
    }
}

function start() {
    if (started == false) {
        document.getElementById("startbtn").innerHTML = " PAUSE ";
        interval = setInterval(timer, 10);
        started = true;
    } else {
        clearInterval(interval);
        document.getElementById("startbtn").innerHTML = " RESUME ";
        started = false;
    }
}

function reset() {
    var lapsarr = document.getElementById("lapssection").getElementsByClassName("lap");
    var l = lapsarr.length;
    var ps = lapssect.getElementsByTagName("p");
    for (i = 0; i < l; i += 1) {
        lapssect.removeChild(lapsarr[0]);
    }

    for (j = 0; j < l; j += 1) {
        lapssect.removeChild(ps[0]);
    }

    clearInterval(interval);
    m = 0; // minute
    s = 0; // second
    ms = 0; // millisecond
    newlap = 1;
    started = false;
    document.getElementById("startbtn").innerHTML = " Start ";
    document.getElementById("timer").innerHTML = "Timer: ";
}