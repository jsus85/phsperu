<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('seo_url'))
{
    function seo_url($cadena){

		$cadena= utf8_decode($cadena);
	    $cadena = str_replace(' ', '-', $cadena);
		$cadena = str_replace('?', '', $cadena);
		$cadena = str_replace('+', '', $cadena);
		$cadena = str_replace(':', '', $cadena);
		$cadena = str_replace('??', '', $cadena);
		$cadena = str_replace('`', '', $cadena);
		$cadena = str_replace('!', '', $cadena);
		$cadena = str_replace('¿', '', $cadena);
		$originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ??';
	    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
	    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
   
      return $cadena;
	
}
}