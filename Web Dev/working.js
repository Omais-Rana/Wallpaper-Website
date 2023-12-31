$(document).ready(function() {


$(".gallery img").on("click", function (e) {
  e.preventDefault();
  var tab = $(this).attr("src");
 window.open(tab, "_blank");
});

  $(".btn").on("click", function (e) {
    e.preventDefault();
   $(".gallery .hidden:hidden").slice(0,4).show(1000);
    if ($(".hidden:hidden").length == 0) {
      $(".btn").replaceWith('<button class="scrl" title="start of page"><i class="fa fa-arrow-up"></i></button>');
      $(".scrl").click(function(){
        window.scrollTo({
          top:0,
          left:0,
          behavior: "smooth"});
        (".scrl").hide();
       })
      }

  });

});