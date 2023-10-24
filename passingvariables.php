index.php
<a href="test.php?variablename='ValueOfVariable'"> Click here </a>
<a href="test.php?userId=1"> User </a>
<a href="test.php?studentId=27"> Student </a>
<a href="test.php?clientId=9"> Client </a>

test.php
<h1> Test page </h1>
<?php
  echo $_GET['clientId'];
?>