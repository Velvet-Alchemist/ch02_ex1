<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
      <?php
      //get the data
      $product = $_POST['product_description'];
      $list_price = $_POST['list_price'];
      $discount_percent = $_POST['discount_percent'];

      //doing stuff
      $discount = $list_price * $discount_percent *.01;
      $final_Price = $list_price - $discount;

      //Formatting
    	$list_price_formatted = "$".number_format($list_price, 2);
      $discount_percent_formatted = $discount_percent ."%";
      $final_Price_Formatted = "$".number_format($final_Price, 2);
       ?>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>



        <label>Discount Amount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $final_Price_Formatted; ?></span><br>
    </main>
</body>
</html>
