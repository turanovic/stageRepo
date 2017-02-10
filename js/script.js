//store our survey answers in this array
var surveyArray = []

/*submits the form onclick
function submitForm() {
	var form = document.getElementById('form')
	var selected = document.getElementById('select').value
	var checkboxes = form.elements.checkbox
	var radios = form.elements.radio
	var checkboxesArray = []
	

	for(i = 0; i < checkboxes.length; i++) {
		if(checkboxes[i].checked)
			checkboxesArray.push(checkboxes[i].value)
	}

	for(i = 0; i < radios.length; i++) {
		if(radios[i].checked)
			var radioValue = radios[i].value
	}

	var newSurvey = {
		checked: checkboxesArray,
		selected: selected,
		radiod: radioValue
	}

	console.log(checkboxesArray)
	console.log(selected)
	console.log(radioValue)

	surveyArray.push(newSurvey)

	console.log(surveyArray)
} */
// var display = document.getElementById('submitButton')
// display.addEventListener('click', submitForm, false)


$(document).ready(function () {


    ///////////////////////////
    // NEWS CHANNELS CHECKBOXES
    ///////////////////////////
    //set initial state.
    $('#nochannel').val($(this).is(':checked'));

    // if there is a change in the #nochannel checkbox
    $('#nochannel').change(function () {

        // if selected
        if ($(this).is(":checked")) {
            $('#nochannel').val($(this).is(':checked'));
            // disable and remove all newschannels selections
            $(".newschannels").attr("checked", false);
            $(".newschannels").attr("disabled", true);
        }
        // if deselected
        else {
            // enable all channels
            $(".newschannels").attr("disabled", false);
        }

    });



    // SUBMIT BUTTON CLICK
    $("#submit_backgroundinformation").click(function () {


        //////////////////////
        // BIRTHDAY VALIDATION
        //////////////////////
        var monthselect = $("#month_select").val();
        var dayselect = $("#day_select").val();
        if ( ( ( monthselect == 4 || monthselect == 6 || monthselect == 9 || monthselect == 11) && dayselect == '31' ) || ( monthselect == 2 && dayselect >= 29 )) {
            alert("U heeft een ongeldige datum ingevoerd. Verander a.u.b. uw geboortedatum.");
            return false;
        }


        ///////////////////////////
        // NEWS CHANNELS VALIDATION
        ///////////////////////////
        // if none news channel is selected
        if (!jQuery("#nochannel").is(":checked") && $("input.newschannels:checked").length <= 0) {
            alert("Beantwoord a.u.b. vraag 8.");
            return false;

        }
        

        // everything ok
        return true;
    });




});
        
    
