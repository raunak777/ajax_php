<?php

if (isset($_POST['username']) && $_POST['username']=='sagar.expertdev@gmail.com' && isset($_POST['password']) && $_POST['password']=='sagar') {
    // do user authentication as per your requirements
    // ...

 
    echo 1;
} else {
    echo 0;
}