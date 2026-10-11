   <?php
   $fee = 300;
   $discountPercent = 0;
   $discount = $fee * $discountPercent / 100;
   $total = $fee - $discount;

   echo "Fee: $fee <br>";
   echo "Discount: $discount <br>";
   echo "Total: $total <br>";

   if ($total > 400) {
       echo "High fee";
   } else {
       echo "Low fee";
   }