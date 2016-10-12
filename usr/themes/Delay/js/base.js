/**
 * Created by Administrator on 2016/9/20 0020.
 */
function openDraw() {
    var nav = $("nav");
    var navWidth = $(nav).width();
    $(nav).animate({left: '0rem'}, 500);
    $('.main').animate({marginLeft: navWidth + "px"}, 500);
    $("header").animate({marginLeft: navWidth + "px"}, 500, function () {
        $("#headerIconOpen").hide();
        $("#headerIconClose").show();
    });
    $(".mask").animate({left: navWidth + "px"}, 500,function () {
        $(this).show();
    });
}
function closeDraw() {
    var nav = $("nav");
    var navWidth = $(nav).width();
    $(nav).animate({left: "-"+navWidth+'px'}, 500);
    $('.main').animate({marginLeft: "0px"}, 500);
    $("header").animate({marginLeft: "0px"}, 500, function () {
        $("#headerIconOpen").show();
        $("#headerIconClose").hide();
    });
    $(".mask").animate({left:"0px"}, 500,function () {
        $(this).hide();
    });
}
function windowChange() {
    $("#headerIconOpen").show();
    $("#headerIconClose").hide();
    $("nav").removeAttr("style");
    $('.main').removeAttr("style");
    $("header").removeAttr("style");
    $(".mask").hide();
}
/**
 * 缓慢滚动到顶端
 */
function scrollToTop() {
    $(document.body).animate({'scrollTop':0},1000);
}