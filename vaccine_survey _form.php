<?php
<!DOCTYPE HTML> 
<html>
<body>
    
<form action="survey.php" method="post">
    <h1>Covid Vaccine Survey Form </h1><br>

Name: <input type="text" name="name"><br>
<br>

E-mail: <input type="text" name="email"><br>
<br>

<!--Gender-->
Gender:<br>

<Input type="radio" name="gender" value="male">Male<br>
<input type="radio" name="gender" value="female">Female<br>
<input type="radio" name="gender" value="other">Other<br>

<!--Vacinated-->
Have you taken Covid Vaccine?:<br>
<Input type="radio" name="vaccinated" value="yes">Yes<br>
<input type="radio" name="vaccinated" value="female">No<br>
<input type="radio" name="vaccinated" value="other">First Dose<br>
    
<br>
<input type="submit">
</form>

</body>
</html>
?>