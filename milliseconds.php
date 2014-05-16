<?php

function milliseconds($format,$m_precision){
	$date=date($format).substr(microtime(),2,$m_precision);
	return $date;
}