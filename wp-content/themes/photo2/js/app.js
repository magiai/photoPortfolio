document.addEventListener("DOMContentLoaded", function () {

    var fullSize = document.querySelectorAll('button');

    for (var i = 0; i < fullSize.length; i++) {
        fullSize[i].addEventListener("click", function (event) {
            this.nextSibling.style.display="block";
        })
    }

    //
    // var showNext = document.querySelectorAll('#rightSide');
    //
    // for (var i = 0; i < showNext.length; i++ ) {
    //
    //     showNext[i].addEventListener("click", function (event) {
    //
    //         event.preventDefault();
    //         //to działa
    //         this.parentElement.nextElementSibling.style.display="block";
    //         this.parentElement.style.display="none";
    //
    //     });
    // }
    //
    // var showPrevious = document.querySelectorAll('#leftSide');
    //
    // for (var i = 0; i < showPrevious.length; i++ ) {
    //
    //     showPrevious[i].addEventListener("click", function (event) {
    //
    //         event.preventDefault();
    //         //to działa
    //         this.parentElement.previousElementSibling.style.display="block";
    //         this.parentElement.style.display="none";
    //
    //     });
    // }


});