

<?php
/*
 loops  تكرار

for($i=0; $i<10; $i++) {
    echo $i.'<br>';
}
*/
?>

<html>
    <head></title>Table</title></head>
    <body>
         <table border='2'>
             <tr>
                 <th>No.</th>
             </tr>
             <?php
             for($i=1; $i<10; $i++) {
                 ?>
                    <tr>
                        <td><?php echo $i;?></td>
                    </tr> 
              <?php  } ?>
            
               
</table>

<table border='2'>
             <tr>
                 <th>No.</th>
             </tr>
             <?php
             for($i=1; $i<=10; $i++) {
                 ?>
                    <tr>
                        <td><?php echo $i;?></td>
                    </tr> 
              <?php  } ?>
            
               
</table>
<br>
         <table border='2'>
             <tr>
                 <th>No.</th>
             </tr>
             <?php
             for($i=10; $i>=1; $i--) {
                 ?>
                    <tr>
                        <td><?php echo $i;?></td>
                    </tr> 
              <?php  } ?>
            
               
</table>

</body>