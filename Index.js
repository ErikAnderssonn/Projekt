function checkInfo()
{
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var comments = document.getElementById('comments').value;
var password = document.getElementById('password').value;

if(name == "" || email == "" || comments == "" || password == "") {
  alert('Fyll i samtliga fält');
  return false;
}
var snabelApos = email.indexOf("@");
var punktPos = email.lastIndexOf(".");
if(snabelApos<1 || punktPos<snabelApos+2 || punktPos+2>=x.length) {
  alert("Ogiltig e-mail. Försök igen");
  return false;
}
}
