<?php
include('inc/header.php');
?>


<section id="calculate">
   <div class="container">
      <h1>Expected pay</h1>
      <div class="output clearfix">
      <?php 
      $gross = $_POST['pay'] *  $_POST['hours'];
      $timeHalf = $_POST['pay'] * 1.5;
      $overtime = $timeHalf * $_POST['overtime'];
      $medical = 43.94;
      $total = $gross + $timeHalf + $overtime;

      
      $federal = number_format($total * 0.12,2);
      $fica = number_format($total * 0.0765 ,2);
      $state = number_format($total * 0.068 ,2);
      $invest = number_format($total * $_POST['invest']/100 ,2);
      $net = $total -$federal;
      $net-= $state;
      $net-= $fica;
      $net-= $invest;
      $net-= $medical;
      $net-= 90;
   
      
      ?>   
       <p>Gross - $<?php echo number_format($total,2) ?></p>
         <p>Federal Dedecuction -  $<?php echo $federal ?></p>
         <p>FICA - $<?php echo $fica ?></p>
         <p>State - $<?php echo $state ?></p>
         <p>Medical -  $<?php echo $medical ?></p>
         <p>401k Contribution -  $<?php echo $invest ?></p>
         <p>Minus Car Note - $90</p>
         <h3>Net pay -   <span>$<?php echo number_format($net,2) ?></span>  </h3>

      </div>
   </div>
</section>


<?php include('inc/footer.php');