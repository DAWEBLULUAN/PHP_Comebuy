$(function() {
  $(window).scroll(function(e) {
    if ($(this).scrollTop() > 400)
    {
        $("#haha").fadeIn("slow");
    }
    else
    {
        $("#haha").hide(); 
    }
  });
});