<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>
</head>
<body>

<h1>Data Calculator</h1>
<hr>

<form method="post" action="App/API.php">
  <input type="text" name="dateField" value="05.12.1992"/>
  <input type="text" name="secondDateField" value="05.12.1992"/>
  <input type="text" name="funtion" id="function">
  <button onclick="add(); return false;"> Add</button>
  <button onclick="add(); return false;"> Diff</button>
  <button onclick="add(); return false;"> TimeTillNow</button>
  <button onclick="add(); return false;"> DayDate</button>
  <input type="submit">
</form>
<script type="text/javascript">
  function add() {
    var input = document.getElementById('function');
    input.value = 'ADD';
  }
  function diff() {
    var input = document.getElementById('function');
    input.value = 'DIFF';
  }
  function timeTillNow() {
    var input = document.getElementById('function');
    input.value = 'TIMETILLNOW';
  }
  function dayDate() {
    var input = document.getElementById('function');
    input.value = 'DAYDATTE';
  }
</script>

</body>
</html>
