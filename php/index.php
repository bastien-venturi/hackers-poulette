<?php

if (!isset($_SESSION["shoppingCart"]))
{
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../dist/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AZ-Store</title>
</head>
<body class="bg-gradient-to-b from-gray-900 text-white to-black">

<?php

require 'partials/nav.php';
require 'partials/section-1.php';
require 'partials/section-2.php';
require 'partials/section-3.php';
require 'partials/section-4.php';
require 'partials/footer.php';
require 'shopping-cart.php';

?>
    
</body>
</html>

