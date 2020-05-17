window.onscroll = function () {
    myFunction()
};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        this.document.getElementById('toolbar').classList.add('toolbar_scroll');
    } else {
        this.document.getElementById('toolbar').classList.remove('toolbar_scroll');
    }
}
