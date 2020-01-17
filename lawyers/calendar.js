//step 4

// extension exercise:
// better to launch ajax via jQuery
// to store calendar changes off site
// then read them in as html with separate classes

//this iteration:
//launch modal prompt box onclick
//passes date and description
//clean up html and css no longer needed

//next iteration:
//fix jumpy css - again
//fix firstletter css or nest extra div

// do date object stuff

var date;
var eventDescription;
var entryId;
var month;
var startDay;
//declare in global namespace
//pass in or assign in closures or IIFEs
//this speeds up performance slightly

const SHORT = 28;
const MEDIUM = 30;
const LONG = 31;

var FEB = SHORT;
var APR, JUN, SEP, NOV = MEDIUM;
var JAN, MAR, MAY, JUL, AUG, OCT, DEC = LONG;

function initCalendarGrid(month, startDay){

	this.month = month;
	this.startDay = startDay;

	for(i=1; i<startDay; i++){
		var newDiv = document.createElement("div");
		newDiv.setAttribute("class", "blanks");

		var newContent = document.createTextNode("-");
		newDiv.appendChild(newContent);

		var currentDiv = document.getElementById("populateGrid");
		document.body.insertBefore(newDiv, currentDiv);
	};//end start days in for

  	for(i=0; i<month; i++){
		var newDiv = document.createElement("div");
		newDiv.setAttribute("id", i+1);
		//make cell clickable
		newDiv.addEventListener("click", getDescription, false);

		var newContent = document.createTextNode(i+1);
		newDiv.appendChild(newContent);

		var currentDiv = document.getElementById("populateGrid");
		document.body.insertBefore(newDiv, currentDiv);
	};//end main for

		////refactor to get daysOfWeek by month from JSON////

}


function getDescription(){
	//wrap in prompt box
	eventDescription = prompt("ENTER A DESCRIPTION OF YOUR EVENT:");

	if(eventDescription != null){
		//get date from context click
		date = this.getAttribute("id");
		date = +date;
		console.log(date);//testing
		//write the description to the DOM
		console.log(eventDescription);//testing
			(function (){//pass in date as variable
				document.getElementById(date).innerHTML = date + "&emsp;" + eventDescription;
				//add class when selected
				document.getElementById(date).className = "calendarCellSelected";
			})();//this will always execute when parent function called
	};
}

function displayDescription(entryId){
	//writes description to correct ID in DOM
	//refactored as IIFE in getDescription() above
}
