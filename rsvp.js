var confirmationDialog = function() {
  var dropdown = document.getElementById("yes_no");
  var answer = dropdown.options[dropdown.selectedIndex].value;
  var confirmationString = "To confirm: \n\n";
  var attendeeArray = new Array();
  for (var i=0; i<7; i++) {
      if (document.getElementById('invitee_name_' + i).value) {
	  attendeeArray[attendeeArray.length] = document.getElementById('invitee_name_' + i).value;
      }
  }
  if (attendeeArray.length == 0) {
    alert('Please enter the name of one or more attendees before submitting.');
    return false;
  }
  for (var i=0; i<attendeeArray.length; i++) {
    confirmationString += "* " + attendeeArray[i] + "\n";
  }
  if (answer == 'yes') {
      confirmationString += "\n_will_ be in attendance at our wedding.";
  } else {
      confirmationString += "\n_will_not_ be in attendance at our wedding.";
  }
  confirmationString += "\n (" + attendeeArray.length;
  if (attendeeArray.length == 1) {
      confirmationString += " RSVP) ";
  } else {
      confirmationString += " total RSVPs) ";
  }
  confirmationString += '\n\nPlease click "OK", if this is correct or "Cancel", if you need to make a correction.';
  return(confirm(confirmationString));
}
