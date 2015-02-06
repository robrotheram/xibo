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
  <table>
    <tr>
      <td>Day:</td>
      <td><input type="text" name="dateDay1" value="05"/></td>
      <td><input type="text" name="dateDay2" value="05"/></td>
    </tr>
    <tr>
      <td>Month:</td>
      <td><input type="text" name="dateMonth1" value="05"/></td>
      <td><input type="text" name="dateMonth2" value="05"/></td>
    </tr>
    <tr>
      <td>Year:</td>
      <td><input type="text" name="dateYear1" value="2015"/></td>
      <td><input type="text" name="dateYear2" value="2015"/></td>
    </tr>
  </table>

  <input type="hidden" name="funtion" id="function">
  <button onclick="add(); return false;"> Add</button>
  <button onclick="diff(); return false;"> Diff</button>
  <button onclick="timeTillNow(); return false;"> TimeTillNow</button>
  <button onclick="dayDate(); return false;"> DayDate</button>
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
