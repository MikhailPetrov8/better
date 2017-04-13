var indexPic = 0;
var picArray = ["images/flag.jpg", "images/view.jpg", "images/window.jpg"];
var picDescArray = ["флаг & ", "вид & ", "окно & "]; /**/
var rightButton = document.getElementById("rightButton");
var nextPic = document.getElementById('mainPic');
nextPic.src = picArray[indexPic];
var picDesc = document.getElementById('picture__description'); /**/

function nextPicture () {
    indexPic = indexPic + 1;
    if (indexPic > picArray.length - 1) {
        indexPic = 0;
    }
    nextPic.src = picArray[indexPic];
    picDesc.innerHTML = picDescArray[indexPic]; /*заменяет текст из массива для определенной картинки*/
}

function prevPicture () {
    indexPic = indexPic - 1;
    if (indexPic < 0) {
        indexPic = picArray.length - 1;
    }
    nextPic.src = picArray[indexPic];
    picDesc.innerHTML = picDescArray[indexPic]; /*заменяет текст из массива для определенной картинки*/
}

rightButton.addEventListener("click", function () {nextPicture ()});

picDesc.innerHTML = picDescArray[indexPic]; /**/

var leftButton = document.getElementById("leftButton");

leftButton.addEventListener("click", function() {prevPicture()});

