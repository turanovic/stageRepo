//store our survey answers in this array
var surveyArray = []

//submits the form onclick
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
}
var display = document.getElementById('submitButton')
display.addEventListener('click', submitForm, false)

