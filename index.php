<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php echo 'utf-8' ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo 'my first php page '?></title>
</head>
<body>
  <?php 
  // lecture #012 to #015
   echo (int) 15.2 +(int) 14.7+(int)(10.5+10.5);
   echo '<br>';
   echo gettype((int) 15.2 +(int) 14.7+((int)10.5+(int)10.5));
   echo '<br>';
   echo (int)(15.2 + 14.7+(10.5+10.5));
   echo '<br>';
   echo gettype((int)(15.2 + 14.7+(10.5+10.5))); 
   echo '<br>';
   echo '<pre>';
   print_r( [ "forntend"=>[
    "0"=> "html",
   "css",
   "js"=>"array"],
      "vuejs"=> [ 
        "2"=>"v2",
       "3"=>"v3",
       "reactjs",
       "svelte"],
       "backend"=>["php","Mysql","security"]
   ]);
    echo '</pre>'
    
   
    
   ?>
</body>
<?php  
// lecture #017 to 

   echo $_GET["username"];
   ?>
    <form action="" method ="get ">
    <input type="text" name= "username">
   </form>
</html>