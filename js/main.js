window.onscroll = function() {FixMenu()};

let nav = document.getElementById("header_nav");
let navContainerPlace = document.getElementById("nav_container").offsetTop;

function FixMenu() {
    if (window.pageYOffset > navContainerPlace) {
        nav.classList.add("fixed_nav_pos");
        document.getElementById("header_img").classList.add("header_img_margin");
    } else {
        nav.classList.remove("fixed_nav_pos");
        document.getElementById("header_img").classList.remove("header_img_margin");
    }
}

function  ChangeRoomBySelect() {
    let roomSelectIndex = document.getElementById("room_select").options.selectedIndex;
    window.location.href = "index.php?p=rooms&r=" + roomSelectIndex;
}

let termZero = document.querySelector(".term_zero");
let termOne = document.querySelector(".term_one");
let termTwo = document.querySelector(".term_two");
let termThree = document.querySelector(".term_three");
let termFour = document.querySelector(".term_four");

function ShowTerm(termId) {
    if(termId === 0) {
        if(termZero.classList.contains("none")) {
            termZero.classList.remove("none")
        } else {
            termZero.classList.add("none")
        }
    } else if(termId === 1) {
        if(termOne.classList.contains("none")) {
            termOne.classList.remove("none")
        } else {
            termOne.classList.add("none")
        }
    } else if(termId === 2) {
        if(termTwo.classList.contains("none")) {
            termTwo.classList.remove("none")
        } else {
            termTwo.classList.add("none")
        }
    } else if(termId === 3) {
        if(termThree.classList.contains("none")) {
            termThree.classList.remove("none")
        } else {
            termThree.classList.add("none")
        }
    } else if(termId === 4) {
        if(termFour.classList.contains("none")) {
            termFour.classList.remove("none")
        } else {
            termFour.classList.add("none")
        }
    }
}

function ShowCalendar(selectObject) {
    let selected = selectObject.options[selectObject.selectedIndex].value;
    let iframe = document.getElementById("iframeCalendar");
    iframe.setAttribute("src", selected);
}