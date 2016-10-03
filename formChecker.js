function formChecker()
{
	var sleepQuant = document.getElementById('sleepQuant').value;
	var timeQuant = document.getElementById('timeQuant').value;
	var distractQuant = document.getElementById('distractQuant').value;
	var emailAddr = document.getElementById('emailAddr').value;
	var pass = document.getElementById('pass').value;
	if(!(emailAddr.includes('@')))
	{
		alert('Invalid Email Address!');
		return false;
	}
	else if (pass=="")
	{
		alert('Invalid Password! (Password can\'t be empty)');
		return false;
	}
	else if (sleepQuant == "" || timeQuant == "" || distractQuant == "")
	{
		alert('Invalid menu amount! (one or more items has no amount selected');
		return false;
	}
	else if (sleepQuant < 0 || timeQuant < 0 || distractQuant < 0)
	{
		alert('Invalid menu amount! (value is negative)');
		return false;
	}
	return true;
}