<?php
function dar_formato_entrada($input)
{
    $input=trim($input);
    $input=stripslashes($input);
    $input=htmlspecialchars($input);
}