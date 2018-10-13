function formValidation()  
{    
var fname = document.registration.firstname;
var lname = document.registration.lastname;
var pob = document.registration.Pob1;
var uadd = document.registration.address;
var mob =  document.registration.Mobno; 
var uemail = document.registration.email;  
if(allLetter(fname))  
{ 
if(allLetter(laname))
{	
if(allLetter(pob))
{
if(alphanumeric(uadd))  
{  
if(allnumeric(mob))
{	 
if(ValidateEmail(uemail))  
{  
}   
}  
}
}  
}  
}  
return false;  
  
}
function allLetter(fname)  
{   
var letters = /^[A-Za-z]+$/;  
if(fname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('firstname must have alphabet characters only');  
fname.focus();  
return false;  
}  
}  
function allLetter(lname)  
{   
var letters = /^[A-Za-z]+$/;  
if(lname.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('lastname must have alphabet characters only');  
lname.focus();  
return false;  
}  
}
function allLetter(pob)  
{   
var letters = /^[A-Za-z]+$/;  
if(pob.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Place of Birth must have alphabet characters only');  
pob.focus();  
return false;  
}  
}
function alphanumeric(uadd)  
{   
var letters = /^[0-9a-zA-Z]+$/;  
if(uadd.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('User address must have alphanumeric characters only');  
uadd.focus();  
return false;  
}  
}
function allnumeric(mob)  
{   
var numbers = /^[0-9]+$/;  
if(mob.value.match(numbers))  
{  
return true;
}  
else  
{  
alert('Mobile No must have numeric characters only');  
mob.focus();  
return false;  
}  
}
function ValidateEmail(uemail)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(uemail.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
uemail.focus();  
return false;  
}