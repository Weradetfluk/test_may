<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign list</title>
</head>
<body>
    
<h1>Hello world</h1>


                                           <!-- ///   class     function  -->
<button><a href="<?php echo base_url() . 'index.php/Teacher/show_create_assign'; ?> "> เพิ่ม Assign </a></button>

<?php  
   
   echo "<pre>"; 
   print_r($data_ass);
   echo "</pre>";  
   ?>


</body>
</html>