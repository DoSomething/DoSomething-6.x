

$(document).ready(function () {
    if ($('#edit-submitted-recommendation-recommender-id').val() == 'athletic' || $('#edit-submitted-recommendation-recommender-id').text() == 'athletic')
        $('#webform-component-letter-of-recommendation--character').hide();
    else if ($('#edit-submitted-recommendation-recommender-id').val() == 'character' || $('#edit-submitted-recommendation-recommender-id').text() == 'character')
        $('#webform-component-letter-of-recommendation--essay-character').hide();
});