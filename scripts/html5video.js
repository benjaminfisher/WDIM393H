/**
 * @author Nate
 */

function VideoHandler() {
  this.init = function() {
    var video = $('video').first()
      , timer = $('<div id="timer"/>')
      , rate  = video[0].playbackRate
      , ctrls = $(' \
          <div id="playback-controls"> \
            <label>Playback Speed:</label> \
            <button class="down">slow down</button> <span>1</span> <button class="up">speed up</button> \
          </div> \
        ');
    video.after(ctrls);

    ctrls
      .find('.down').click(function(){
        if (video[0].playbackRate === 0) return false;
        video[0].playbackRate -= .25;
        var cur = video[0].playbackRate;
        ctrls.find('span').text(cur);
      })
        .end()
      .find('.up').click(function(){
        video[0].playbackRate += .25;
        var cur = video[0].playbackRate;
        ctrls.find('span').text(cur);
      });

    /*video.on('click.first', function(){
      var progress = $('<progress id="video-loader" max="100" value="0">Loading...</progress>');
      video.after(progress);
    });
    video.after(timer);
    video.bind('timeupdate', function(){
      $('#timer').html($(this).get(0).currentTime);
    });*/
  };
};

$(function(){
  if ( $('video').length > 0 ) {
    var vid = new VideoHandler();
    vid.init();
  }
});
