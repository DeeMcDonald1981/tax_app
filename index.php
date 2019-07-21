<?php
include('inc/header.php');
include('inc/hero.php');
?>



<section id="calculate">
   <div class="container">
      <form action="calculate.php" method="post">
         <label for="">Pay Rate</label>
         <input type="text" name="pay">

         <label for="">Hours Worked</label>
         <input type="text" name="hours">

         <label for="">Overtime</label>
         <input type="text" name="overtime">

         <label for="">401k %</label>
         <input type="text" name="invest">

         <input type="submit" name="submit" value="Calculate">
      </form>
   </div>
</section>


<?php include('inc/footer.php');