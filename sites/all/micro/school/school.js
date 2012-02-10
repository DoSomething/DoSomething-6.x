var lastQuery;
console.log('loaded!');

jQuery(document).ready(function () {
  var schoolName = jQuery('#edit-title, #edit-submitted-name-of-school');
  var stateName = jQuery('#edit-field-state-value, #edit-submitted-state');
  var gsid = jQuery('#edit-field-gsid-0-value, #edit-submitted-gsid');
  var sForm = jQuery('#webform-client-form-736100, #school-node-form');

  if (schoolName.val() == '')
  {
    stateName
      //.prepend('<option>-Select a state-</option>')
      .val('')
      .change(function () {
        schoolName
          .removeAttr('disabled')
          .val('');
      });
    schoolName
      .attr('disabled', 'disabled')
      .val('Please select a state first.')
      .autocomplete({
        source: function( request, response ) {
          var completes;
          jQuery.getJSON('/nd/school/finder.php', {
            state: stateName.val(),
            query: request.term 
          }, function(data) {
            completes = parseOut(data);
            lastQuery = data;
            response(completes);
          });
        }, select: function(e, ui) {
          schoolName.attr('disabled', 'disabled');
          gsid.val(findGSID(ui.item.value));
          var clear = jQuery('<a href="#">Clear</a>').click(function () {
            schoolName.removeAttr('disabled');
            jQuery(this).remove();
            return false;
          });
          schoolName.parent().append(clear);
        }
      });
  }
  sForm.submit(function () {
    schoolName.removeAttr('disabled');
    /*
    if (gsid.val() == '') {
      alert('Please choose a school from the autocomplete menu.');
      return false;
    }
    */
  });
});

function parseOut(obj) {
  var schools = [];
  if (obj.school instanceof Array) {
    for (var i = 0; i < obj.school.length; i++) {
      schools.push(obj.school[i].name);
    }
  }
  else {
    schools.push(obj.school.name);
  }
  return schools;
}

function findGSID(schoolName) {
  if (lastQuery.school instanceof Array) {
    for (var i = 0; i < lastQuery.school.length; i++) {
      if (lastQuery.school[i].name == schoolName) {
        return lastQuery.school[i].gsId;
      }
    }
  }
  else
  {
    return lastQuery.school.gsId;
  }
  return null;
}
