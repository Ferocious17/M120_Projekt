<?php

/*echo 'Hello '.$data['name'].'<br><br><br>';*/

if (isset($data['params']))
{
    foreach ($data['params'] as $param)
    {
        echo $param;
    }
}

?>