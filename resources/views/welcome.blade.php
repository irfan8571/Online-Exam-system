<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: pink;
}
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: #e65cff;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: white;
  color: red;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
a {
  color: dodgerblue;
}
}
</style>
</head>
<body>

<h1>Welcome to Online Exam</h1>
<form method="GET" action="/catagory">
  <input type="radio" id="regT" name="selection"value="regT">
  <label for="regT">Sign up as a Teacher</label><br>
  <input type="radio" id="regS" name="selection"value="regS">
  <label for="regS">Sign up as a Student</label><br>
  <input type="radio" id="logT" name="selection"value="logT">
  <label for="logT">Sign in as a Teacher</label><br>
  <input type="radio" id="logS" name="selection"value="logS">
  <label for="logS">Sign in as a Student</label><br>
  <input type="submit" value="Submit">

  <br>  

</form>

</body>
</html>