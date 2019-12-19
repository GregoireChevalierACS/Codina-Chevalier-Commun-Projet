<?php

require('model/frontend.php'); 

function welcome(){
require('view/frontend/welcome.php');
}

function launched(){
    require('view/frontend/launched.php');
} 
function mercure(){
    $infosArray = getInfos('Mercure');
    require('view/frontend/infosPlanet.php');

}
