<?php

function preprint($str)
{
	echo "<pre>", print_r($str, true), "</pre>";
}

preprint($_SERVER);