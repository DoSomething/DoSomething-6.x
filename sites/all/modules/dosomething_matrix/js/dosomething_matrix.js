$(document).ready(function() {

  /* convert select options into views arguments */

  $('#action-matrix').submit(function() {
    var fieldnames = ['select#time', 'select#where', 'select#who', 'select#cause'];
    var args = new Array();
    for(field in fieldnames) {
      var value = $(fieldnames[field]).val();
      value = value.replace(/\+{2,}/,'+');
      value = value.replace(/^\++/,'');
      value = value.replace(/\++$/,'');
      if(value.length==0)
        value = '*';
      args.push(value);
    }
    window.location.href = '/actnow/matrix/' + args.join('/');
    return false;
  });

  /* reflect current views arguments in select list(assume they are the last 4 path elements) */

  var args = window.location.pathname.split('/');
  if (args[1] == 'actnow' && args[2] == 'matrix') {
    var count = 0;
    var ids = [ 'cause', 'who', 'where', 'time' ];
    var vals = [];
    for (var i = args.length - 1; i >= 0 && count < 4; i--, count++) {
      vals[count] = args[i];
    }
    for (var i = 0; i < vals.length; i++) {
      var select_id  = '#action-matrix #' + ids[i];
      var select_option = select_id + ' option[value="' + vals[i] + '"]';
      $(select_id).val($(select_option).val());
    }
  }

  $('#action-matrix #cause').customStyle();
  $('#action-matrix #who').customStyle();
  $('#action-matrix #where').customStyle();
  $('#action-matrix #time').customStyle();

});
