jQuery(document).ready(function($) {

var jq = $.noConflict();

jq(function(){

    //set function interval
    setInterval("rotateJumbo()", 3000);
});

function rotateJumbo() {
  var curPhoto = jq('div.current');
  var nxtPhoto = curPhoto.next();
  if (nxtPhoto.length == 0)
    nxtPhoto = jq('.jumbotron div:first');

  curPhoto.removeClass('current').addClass('previous');
  nxtPhoto.css({ opacity: 0.0}).addClass('current')
    .animate({ opacity: 1.0}, 1000),
    function() {
      curPhoto.removeClass('previous');
    }
}

});
