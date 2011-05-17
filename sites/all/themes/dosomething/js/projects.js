$(document).ready(function() {
  $('div.view-projects-search.view-display-id-panel_pane_2 div.item-list ul li').not(':first-child').hide();
  $('div.view-projects-search.view-display-id-panel_pane_2 div.item-list ul').cycle({
    containerResize: 0,
    pause: 1,
    prev: '#recent-prev',
    next: '#recent-next'
  });
});
