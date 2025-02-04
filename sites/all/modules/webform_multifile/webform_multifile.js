Drupal.behaviors.webform_multifile = function (context) {
  // Re-initialize multifile fields with the proper settings
  if(typeof MultiFile_fields !== 'undefined'){
    for(var i=0; i<MultiFile_fields.length; i++){
      $('input[type=file].multi.'+MultiFile_fields[i].id).MultiFile(MultiFile_fields[i].properties);
    }
  }

  // Add the extra brakets to all the Multifile fields
  $("input[type=file].multi").each(function(){
    var field = $(this);
    field.attr('name', field.attr('name') + '[]');
  });
}
