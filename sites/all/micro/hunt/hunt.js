Shadowbox.init();

function sharePopup() {
  $(window).load( function() {
    outerDiv = document.createElement('div');
    newDiv = document.createElement('div');
    $(newDiv).addClass('share-popup');
    $(newDiv).css('padding','10px');
    $(newDiv).append($('h2.team-name-for-sb')).append('<p>Maximize your chances to win!  Invite teammates by sharing your team page on Facebook and Twitter with the links below!</p>').append($('#twitter-fb-links'));
    $(outerDiv).append(newDiv);
    Shadowbox.open({
      content:        $(outerDiv).html(),
      player:         "html",
      width:          316,
    });

  });
}
