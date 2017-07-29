function swap(image) {
document.getElementById("gallery").src = image.href;
var alttext = image.getElementsByTagName("img")[0].getAttribute("alt");
document.getElementById("gallery-description").innerHTML = alttext;
}

function swapFrodo(image) {
document.getElementById("frodo").src = image.href;
}

function swapSam(image) {
document.getElementById("sam").src = image.href;
}

function swapGandalf(image) {
document.getElementById("gandalf").src = image.href;
}

function swapAragorn(image) {
document.getElementById("aragorn").src = image.href;
}

function swapLegolas(image) {
document.getElementById("legolas").src = image.href;
}

function swapGimli(image) {
document.getElementById("gimli").src = image.href;
}

function swapBoromir(image) {
document.getElementById("boromir").src = image.href;
}

function swapMerry(image) {
document.getElementById("merry").src = image.href;
}

function swapPippin(image) {
document.getElementById("pippin").src = image.href;
}
