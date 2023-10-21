<?php

if(!isset($_GET['page']))
{   echo 'Welcome to Brain aka Controller';
}

if($_GET['page'] == 'home')
    require '.\view\home.php';

if($_GET['page'] == 'about')
    require '.\view\about.php';

if($_GET['page'] == 'product'){
    require '.\model\productmodel.php';
    require '.\view\product.php';
}
