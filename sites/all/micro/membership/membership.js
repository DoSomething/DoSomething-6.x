var dd = 0, hh = 0, mm = 0, ss = 0;
var dd_box, hh_box, hh_box, mm_box, ss_box;
var launch = 1321027871;
var loc;

$(document).ready(function () {
    loc = $('#countdown');
    dd_box = createElement('dd_box', 'days');
    hh_box = createElement('hh_box', 'hours');
    mm_box = createElement('mm_box', 'minutes');
    ss_box = createElement('ss_box', 'seconds');
    updateBox();
});
function updateBox() {
    var t = new Date().getTime();
    t = Math.round(launch-t/1000);
    updateTimes(t);
    dd_box.html(z(dd));
    hh_box.html(z(hh));
    mm_box.html(z(mm));
    ss_box.html(z(ss));
    setTimeout('updateBox()', 1000);
}

function updateTimes(t) {
    dd = Math.floor(t/60/60/24);
    t-= dd*60*60*24;
    hh = Math.floor(t/60/60);
    t-= hh*60*60;
    mm = Math.floor(t/60);
    t-= mm*60;
    ss = t;
}

function createElement(id, describe) {
    var e = $(document.createElement('div')).attr('id', id).addClass('num-wrapper');
    var num = $(document.createElement('div')).addClass('num-down');
    var label = $(document.createElement('div')).addClass('num-label').html(describe);
    e.append(num).append(label);
    loc.append(e);
    return num;
}

function z(item) {
    item = item.toString();
    if (item.length < 2)
        item = '0'+item;
    return item;
}