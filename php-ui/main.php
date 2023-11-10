
<?php error_reporting(0); ?> 
<?php
    include('./cal.php');  
?>

<?php 

// Request Post Arguments from Form
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$show_result = '';
  if ($_POST['do'] == '+') {
    $show_result = $calc->plus($num1,$num2)->equal();
  }
  else if ($_POST['do'] == '-') {
    $show_result = $calc->minus($num1,$num2)->equal();
  }
  else if ($_POST['do'] == '*') {
    $show_result = $calc->multiply($num1,$num2)->equal();
  }
  else if ($_POST['do'] == '/') {
    $show_result = $calc->divide($num1,$num2)->equal();
  }
  else if ($_POST['do'] == 'CE') {
    $num1= '';
    $num2= '';
    $show_result= '';
  }
?>

<html>
<head>
<title>PHP Calcultor Simple Project</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#do').on('click',  function(e) {
      if($('input[type="text"][name="num1"]').val() == "" || $('input[type="text"][name="num2"]').val() == "")
      {
          alert('Please Enter a Value!');
          return false;

      }
      else {
        window.location.href='main.php';
      }
    });
});
</script>
</head>
<body>
<form name="input" method="post" action="">
<table border="0" width="100%">
  <tr height="100px">
        <td></td>
  </tr>
  <tr>
    <td align="center">
    <h3>Calcultor based on PHP Class (Euiyoung.Hwang, marieuig@gmail.com)</h3>
  </td>
  </tr>
  <tr height="100px">
        <td></td>
  </tr>
  <tr>
    <td align="center">
    <h3>Calculator</h3>
  </td>
  </tr>
  <tr>
    <td align="center">
      <input type="text" name="num1" value="<?php echo $num1?>" size="10">
      <input type="text" name="num2" value="<?php echo $num2?>" size="10">
    </td>
  </tr>
  <tr>
    <td align="center">
      <input type="submit" value="+" name="do" id="do"> 
      <input type="submit" value="-" name="do" id="do"> 
      <input type="submit" value="*" name="do" id="do"> 
      <input type="submit" value="/" name="do" id="do"> 
      <input type="submit" value="CE" name="do" id="do"> 
    </td>
  </tr>
  <tr>
    <td align="center">
      <input type="text" name="result" value="<?php echo $show_result?>" size="20">
    </td>
  </tr>
</table>
</form>