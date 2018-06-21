/********************************************************
*	JavaScript 											*
*	Author: Chad Evans									*
*	Date: 5/13/2015										*
*	Version: 1.50										*
*	Purpose: to manipulate the open/closure message		*
*			displayed at scrappysrecycling.com website.	*
*														*
********************************************************/

// set variables
var d = new Date();
var now = d.getTime();
var day = d.getDay();
var hr = d.getHours();
var oHr = 8; //opening hour
var cTime = 20; //closing hour
var currentStatus = "";
var isOpenNow = false;

// Function to determine status and modify the varible accordingly

function openNow() {
	var openOrClosed = "<p class='closed'>Now Closed";
	var reOpenDay = "";
	var reOpen = "We open at " + oHr  + " a.m. ";
	var oDateTime = new Date(d.getFullYear(),d.getMonth(),d.getDate(),oHr,0,0,0);
	var oTime = oDateTime.getTime();
	var openToday = true;
	var openNow = false;

       if (openToday)
	{
         if (hr >= cTime) {
		reOpenDay = "tomorrow.";
         }
         else {
            reOpenDay = "today.";
         }
	}
		
	if (openToday)
	{
		if (now >= oTime && hr < cTime)
		{
			openNow = true;
			isOpenNow = true;
		}
	}

	if (openNow)
	{
		openOrClosed = "<p class='open'>Now Open";
		reOpen = "We close at " + (cTime-12) + " pm ";

	}
	
	currentStatus += openOrClosed + "<br>" + reOpen + reOpenDay + "</p>";

	document.writeln(currentStatus);
}


function highlightRow() {
	var rowNum;
	var cName = "highlight";
	
      if (isOpenNow){
		rowNum = "tr1";
	}
      else
	{
		rowNum = "tr2";
            cName += "Closed";
	}
	
	document.getElementById(rowNum).className = cName;
}