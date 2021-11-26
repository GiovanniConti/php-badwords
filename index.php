<?php

$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores accusantium aperiam aliquam officia ab. Iste, expedita reiciendis itaque blanditiis quasi exercitationem dolore quas ut necessitatibus a numquam libero autem praesentium?
              Eos consequuntur natus debitis quia illum unde possimus distinctio id praesentium nobis, doloribus ducimus animi odit aspernatur sit qui tenetur asperiores. Iure minima officiis ipsum, perferendis blanditiis numquam cum nulla!
              Quae dolorem accusantium, amet eligendi eaque reprehenderit, dignissimos earum minus inventore architecto tempore, vero voluptatibus optio fugiat saepe. Nemo error magnam iusto minus animi distinctio nostrum blanditiis commodi architecto consequuntur?
              Hic, pariatur laboriosam? Maiores animi obcaecati sequi optio! Vero mollitia quas earum eum pariatur quam eaque consequuntur dolores. Rerum, neque quos accusantium ea tempore recusandae iure eaque repellendus inventore iste.
              Placeat saepe iusto consequuntur dolores ut esse tenetur. Doloremque saepe aperiam, corrupti ut natus aut? Optio recusandae labore aliquam laborum eveniet unde! Tempora accusamus distinctio asperiores impedit saepe, veritatis dolorum!";

$userWord = trim($_GET["word"]);
$censuredParagraph = str_replace($userWord, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censure</title>
</head>
<body>
  <main>
    <h2>Given paragraph:</h2>
    <p> <?php echo $paragraph ?> </p>
    <h3>The paragraph is long: <?php echo strlen($paragraph) ?> words</h3>
    
    <h2>Input a word adding '?word=' to the url</h2>
    <h3>Your word is: <?php echo $userWord ?></h3>

    <h2>The censured paragraph.</h2>
    <p><?php echo $censuredParagraph ?></p>
    <h3>The censured paragraph is long: <?php echo strlen($censuredParagraph) ?> words</h3>
  </main>
</body>
</html>