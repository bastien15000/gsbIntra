<?php

require('E:/Annee_2021/gsbIntra/model/model.php');

function index()
{
    require('E:/Annee_2021/gsbIntra/index.php');
}


function familles()
{
	$lesfam = getFamilles(); 
    require('E:/Annee_2021/gsbIntra/view/familles.php');
}

// function ()
// { 
//     require('./view/.php');
// }

// function ()
// {
//     require('./view/.php');
// }

// function ()
// {
//     require('./view/.php ');
// }
