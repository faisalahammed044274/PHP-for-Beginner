<?php

// 1) Make a function getDiscountedPrice()
// 2) Pass Price and Discount percentage
// 3) Return the discountedPrice
// Formula:
// discounted_price = original_price - ( (original_price * discount) / 100 )

 function getDiscountedPrice(){
     $discounted_price = 100 -  ((100 * 31) /100);
     echo $discounted_price;
 }

 echo getDiscountedPrice();





?>