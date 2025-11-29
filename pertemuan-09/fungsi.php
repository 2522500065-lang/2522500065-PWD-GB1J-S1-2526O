<?php
function bersihkan($str)
{
 return htmlspecialchars($str)
}
function tidakkosong($str)
{
    return strlen(trim($str)) > 0;
}
