$(function() {
    setTimeout(function() {
        document.getElementById("container").style.opacity = "0";
        document.getElementById("set").style.opacity = "1";
    }, 2000);
})

document.addEventListener("scroll", (s) => {
    if(this.oldScroll > this.scrollY){
        $("#navBar").css("padding-top", "0px");
        $("#navBar").css("padding-bottom", "5px");
    }
    this.oldScroll = this.scrollY;
    

});
$(window).scroll(function(e) {
    var posicao = $(window).scrollTop();
    if (posicao >= 50) {
        $("#navBar").css("background-color", "rgba(0, 0, 0, 0.650)");
        $("#navBar").css("height", "70px");
        $("#navBar").css("padding-top", "5px");
        $("#navBar").css("padding-bottom", "5px");
        $("li a").css("top", "0px");
        $("#logo").css("margin-top", "0%");
        $("#sign-one").css("padding-top", "0px");
    } else {
        $("#navBar").css("background-color", "transparent");
        $("#navBar").css("height", "40px");
        $("#navBar").css("padding-top", "0px");
        $("#logo").css("margin-top", "4%");
        $("li a").css("top", "30px");
        $("#sign-one").css("padding-top", "30px");
    }
})
