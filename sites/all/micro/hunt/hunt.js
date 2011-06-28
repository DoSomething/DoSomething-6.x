Shadowbox.init({skipSetup:true, enableKeys:false, handleOversize: "none"});

function sharePopup() {
  $(window).load( function() {
    newDiv = document.createElement('div');
    $(newDiv).append($('h2.team-name-for-sb')).append('<p>Maximize your chances to win!  Invite teammates by sharing your team page on Facebook and Twitter with the links below!</p>').append($('#twitter-fb-links'));
    Shadowbox.open({
      content:        $(newDiv).html(),
      player:         "html",
      width:          316,
    });

  });
}
