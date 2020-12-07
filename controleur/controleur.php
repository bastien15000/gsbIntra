<?php

function index()
{
    require('./index.php');
}


function familles()
{
	$lesfam = getFamilles(); 
    require('./view/familles.php');
}

function consulterFamilles()
{
	$lesfam = getFamilles(); 
    require('./view/consulter.php');
}

function ()
{
    require('./view/.php');
}

function ()
{
    require('./view/.php ');
}
