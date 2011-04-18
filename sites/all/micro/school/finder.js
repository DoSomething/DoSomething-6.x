jquery144(document).ready(function() {

  jquery144('#school-state').change(function(e) {
    if (jquery144('#school-state').val() != '<state/province>') {
      jquery144('.s-name').show();
    } else {
      jquery144('.s-name').hide();
    }
  });

  jquery144('#find-my-school').click(function() {
    jquery144.ajax({
      url: '/nd/school/finder.php',
      data: {
        state: jquery144('#school-state').val(),
        query: jquery144('#school-name').val()
      },
      dataType: 'json',
      success: function(data) {
        console.log("%o", data);
        result = '<h3>Matches:</h3><ul>';
        if (jquery144.isArray(data.school)) {
          for (i = 0; i < data.school.length; i++) {
            result += '<li>' + data.school[i].name + '</li>';
          }
        } else if (data) {
          result += '<li>' + data.school.name + '</li>';
        } else {
          result += '<li><em>No matches&hellip;</em</li>';
        }
        result += '</ul>';
        jquery144('.results').html(result);
      }
    });
  });

});
