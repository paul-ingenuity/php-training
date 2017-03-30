<!DOCTYPE html>
<html>
<p>length:</p>
<?php
    echo strlen("Hello world!");
?>
</br>
<p>word count:</p>
<?php
    echo str_word_count("Hello world!");
?>
</br>
<p>reverse:</p>
<?php
    echo strrev("Hello world!");
?>
</br>
<p>position:</p>
<?php
    echo strpos("Hello world!", "world");
?>
</br>
<p>replace:</p>
<?php
    echo str_replace("world", "Dolly", "Hello world!");
?>
</html>
