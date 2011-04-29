$(document).ready( function() {
	var current_position = 0;
	var quiz_values = new Object;
	var quiz_num_questions = 5;
	var slide_width = 350;
	$.getJSON("http://spreadsheets.google.com/feeds/list/tUrkK102yxQPlqQZgSTK9YQ/1/public/values?alt=json-in-script&callback=?", function(data) {
    quiz_num_questions = data.feed.entry[0].gsx$numquestions.$t;
		$.each(data.feed.entry, function (i, item) {
			if (!item.gsx$questions.$t) { return false; }
			$('#quiz-questions').append('<fieldset id="q' + (i + 1) + 'f"><legend>' + item.gsx$questions.$t + '</legend><div class="guide">(' + (i + 1) + ' of ' + quiz_num_questions + ')</div></fieldset>');
		});
		$.each(data.feed.entry, function (i, item) {
			var selector_string = '#quiz-questions #q' + item.gsx$whichquestion.$t + 'f';
			var name_string = 'q' + item.gsx$whichquestion.$t;
			if (item.gsx$answernumber.$t == 1) {
				name_string += '" checked="checked';
			}
			var question_string = 'q' + item.gsx$whichquestion.$t + item.gsx$answernumber.$t;
			$(selector_string).append('<div class="answer-box"><input type="radio" name="' + name_string + '" id="' + question_string + '" /><label class="answer" for="' + question_string + '">' + item.gsx$answertext.$t + '</label></div>');
			quiz_values[question_string] = new Object;
			quiz_values[question_string].sports = item.gsx$interestsports.$t;
			quiz_values[question_string].arts = item.gsx$interestthearts.$t;
			quiz_values[question_string].tech = item.gsx$interesttechnology.$t;

			quiz_values[question_string].animal = item.gsx$causeanimalwelfare.$t;
			quiz_values[question_string].disaster = item.gsx$causedisasterrelief.$t;
			quiz_values[question_string].discrimination = item.gsx$causediscrimination.$t;
			quiz_values[question_string].education = item.gsx$causeeducation.$t;
			quiz_values[question_string].environment = item.gsx$causeenvironment.$t;
			quiz_values[question_string].health = item.gsx$causehealthandfitness.$t;
			quiz_values[question_string].hiv = item.gsx$causehivandsexuality.$t;
			quiz_values[question_string].international = item.gsx$causeinternationalhumanrights.$t;
			quiz_values[question_string].poverty = item.gsx$causepoverty.$t;
			quiz_values[question_string].violence = item.gsx$causeviolenceandbullying.$t;
			quiz_values[question_string].war = item.gsx$causewarpeaceandpolitics.$t;
		});
	});
	$('#quiz-end').click(function() {
		var sports = 0;
		var arts = 0;
		var tech = 0;

		var animal = 0;
		var disaster = 0;
		var discrimination = 0;
		var education = 0;
		var environment = 0;
		var health = 0;
		var hiv = 0;
		var international = 0;
		var poverty = 0;
		var violence = 0;
		var war = 0;
		$('#quiz-questions input:checked').each(function(i, item) {
			sports += quiz_values[item.id].sports* 1;
			arts += quiz_values[item.id].arts * 1;
			tech += quiz_values[item.id].tech* 1;

			animal += quiz_values[item.id].animal * 1;
			disaster += quiz_values[item.id].disaster * 1;
			discrimination += quiz_values[item.id].discrimination * 1;
			education += quiz_values[item.id].education * 1;
			environment += quiz_values[item.id].environment * 1;
			health += quiz_values[item.id].health * 1;
			hiv += quiz_values[item.id].hiv * 1;
			international += quiz_values[item.id].international * 1;
			poverty += quiz_values[item.id].poverty * 1;
			violence += quiz_values[item.id].violence * 1;
			war += quiz_values[item.id].war * 1;
		});

    var intScores = new Array(sports,arts,tech);
    var intCodes = new Array(sportsCode,artsCode,techCode);
    random1 = Math.floor(Math.random() * intCodes.length);
    var maxIntScore = intScores[random1];
    var maxIntCode = intCodes[random1];
    
    var i = 0;
    for (i = 0; i < intScores.length; i++) {
       if (intScores[i] > maxIntScore) {
          maxIntScore = intScores[i];
          maxIntCode = intCodes[i];
       }
    }

    var causeScores = new Array(animal, disaster, discrimination, education, environment, health, hiv, international, poverty, violence, war);
    var causeCodes = new Array(animalCode,disasterCode,discriminationCode,educationCode,environmentCode,healthCode,hivCode,internationalCode,povertyCode,violenceCode,warCode);
    var random2 = Math.floor(Math.random() * causeCodes.length);
    var maxCauseScore = causeScores[random2];
    var maxCauseCode = causeCodes[random2];

    for (i = 0; i < causeScores.length; i++) {
      if (causeScores[i] > maxCauseScore) {
        maxCauseScore = causeScores[i];
        maxCauseCode = causeCodes[i];
      }
    }

		var result_string = 'aN' + maxIntCode + 'N' + maxCauseCode + 'b22';

		window.open('http://www.dosomething.org/projects/results?result=' + result_string, 'surge');
		return false;
	});

	$(".arrow").bind('click', slider);

	function manageControls(position) {
    if (position < 1) {
      $('.arrow.left').hide();
    } else {
      $('.arrow.left').show();
    }
    if (position >= (quiz_num_questions - 1)) {
			$(".arrow.right").hide();
			$("#quiz-end").show();
		} else {
			$(".arrow.right").show();
			$("#quiz-end").hide();
		}
	}
	
	manageControls(0); 

	function slider() {
		current_position = ($(this).hasClass('right'))
		? current_position+1 : current_position-1;
		manageControls(current_position);
		$('#quiz-window').animate({
			'marginLeft': slide_width*(-current_position)
		});
		return false;
	}
});
