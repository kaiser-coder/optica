$('.prod-btn').click(function () { 
    $('nav ul .prod-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
 });


 $('.aprov-btn').click(function () { 
    $('nav ul .aprov-show').toggleClass("show1");
    $('nav ul .second').toggleClass("rotate");
 });


 $('nav ul li ').click(function () { 
   $(this).addClass("active").siblings().removeClass("active");

  });


//   toggle menu
$('.toggle').click(function(){
$('.toggle').toggleClass("actif");
$('.navigation').toggleClass("actif");
$('.main').toggleClass("actif");
});
