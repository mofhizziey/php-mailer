<?php include('server.php'); 

if(isset($_POST['send'])){
  if(!$_POST['subject']){
     $error_subject = 'Fill in the value of subject';
}else{
  $subject = $_POST['subject'];
}
 if(!$_POST['content']){
    $error_content = 'Fill in the content';
}else{
  $content = $_POST['content'];
}
 if(!$_POST['to']){
    $error_to = 'Fill in the to';
}else{
  $to = $_POST['to'];
}
 if(!$_POST['from']){
    $error_from = 'Fill in the from';
}else{
  $from = $_POST['from'];
}

if($subject && $content && $to && $from ){
  $headers = "From: <?php echo $from ?>" . "\r\n" .
  "CC: <?php echo $to ?>";

  mail($to, $subject, $content, $headers);
  header("Location: successful.php");
}

}
?>




<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="bg-dark text-light text-center">mo-mailer</nav>
<div class="container p-5">
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="">
    <div class="form-group text-center">
      <?php echo $error_to  ?>
      <input type="text" class="form-control"    placeholder="recipient" name="to"><br>
      <?php echo $error_from  ?>
      <input type="text" class="form-control"    placeholder="from" name="from"><br>
      <?php echo $error_subject  ?>
      <input type="text" class="form-control"    placeholder="Subject" name="subject"><br>
      <?php echo $error_content  ?>
      <textarea  class="form-control" name="content"></textarea><br>
      <input type="submit" class="btn btn-success btn-block" value="send" name="send">
    </div>
  </form>
</div>
    
    
    
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>