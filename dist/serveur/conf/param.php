<?php
/*

This file is part of Orange Confort+ | A centralized Javascript application to enable users to customize display and behaviour of websites to suit their advanced accessibility needs
    
    Copyright (C) 2014 - 2017  Orange SA

    Orange Confort+ is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    Orange Confort+ is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details (LICENSE.txt file).


*/
/*------------------------------------------*/
/* Cookies information |                    */
/*------------------------------------------*/

$cookie_domain = "COOKIEDOMAIN";

$cookie_name	= "UCI3";
$cookie_blackListe = "uci-bl";
$cookie_name_old	= "UsageComfort2"; 
/*==========================================*/

/*------------------------------------------*/
/* Debug mode |                    			*/
/*------------------------------------------*/
$debug = false;
if(isset($_GET["debug"])) {
	$debug = $_GET["debug"];
}
/*==========================================*/