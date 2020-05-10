window.onscroll = function () {
    myFunction()
};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        ;
        document.getElementById("toolbar").classList.add('detached_toolbar');
    } else {
        document.getElementById("toolbar").classList.remove('detached_toolbar');
    }
}