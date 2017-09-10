// Global Variables
var deg= 0;
var startingDeg= 0;
var luckynumbers = [];
var rotateStarted = 0
var luckyNumbersOrder = [6,18,31,19,8,12,29,25,10,27,00,1,13,36,24,3,15,34,11,5,17,31,20,7,11,30,26,9,28,0,2,14,35,23,4,16,33,21]
var rotateDeg = 360/luckyNumbersOrder.length;


function saveLuckyNumber() {
  // Your Code goes Here
  // All the best.
    var index = Math.round((deg-(Math.floor(deg/360)*360))/rotateDeg);
    var poit = luckyNumbersOrder[index];
    if(poit%2 == 0)
        {
            if(index-1 < 0)
                {
                    poit = luckyNumbersOrder[luckyNumbersOrder.length-1];
                }
            else
                {
                    poit = luckyNumbersOrder[index-1];
                }
            
        }
    var $li = $('<li style="">'+poit+'</li>');
    $('#luckynumbers').append($li);
    $li.animate({left:0,opacity:1});
}

// OnDocument ready DOM functions
$(document).ready(function(){

  $("#stopRotate").hide()

  $("#startRotate").click(function(){
    $("#startRotate").hide();
    $("#stopRotate").show();
    startingDeg = deg;
    startRotate = setInterval(function() {
      $("#board").removeAttr('style');
      deg += rotateDeg
      var css = '-webkit-transform: rotate(' + deg + 'deg);';
      $("#board").attr('style', css);
    }, 10);
  })

  $("#stopRotate").click(function(){
    $("#startRotate").show()
    $("#stopRotate").hide()
    clearInterval(startRotate);
    saveLuckyNumber()
  })
});
