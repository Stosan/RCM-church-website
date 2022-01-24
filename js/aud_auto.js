$(function()
{
var file = document.getElementById('plattrk').textContent;
var obj = document.createElement("audio");
var play_icon = document.getElementById('play-icon');
var player_btn = document.getElementById('play');


$('.play').on('click', function () { 
         obj.src = file; 
        obj.play();
    play_icon.innerHTML = "pause_circle";
      $('.play').addClass("hide")
      $('.pause').removeClass("hide")
      $('.pause').removeClass("hidden")
      $('.pause').addClass("show")
  
        
    setTimeout(()=> {

        obj.pause();
        $('.play').removeClass("hide")

        $('.pause').addClass("hidden")
        $('.play').addClass("show")
        play_icon.innerHTML = "play_circle";
    }, 20000);
});

$('.pause').on('click', function () { 


obj.pause();

$('.play').removeClass("hide")

$('.pause').addClass("hidden")
$('.play').addClass("show")
play_icon.innerHTML = "play_circle";
   
});

});