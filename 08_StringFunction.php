<?php

$name = "Harry";
echo $name;
echo "<br>";
echo "The length of the String is ". strlen($name);

echo str_word_count($name);
echo "The word count of the String is " . str_word_count($name);

echo  "<br>";
?>

<?php

$name = "Harry";
echo $name;
echo "<br>";
echo "The length of the String is " . strlen($name);
echo "<br>"; // Add a line break for better formatting
echo "The word count of the String is " . str_word_count($name); // Include a descriptive text for word count
echo "<br>";

echo  strrev($name);

?>
