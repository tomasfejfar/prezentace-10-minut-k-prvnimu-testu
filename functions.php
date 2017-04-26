<?php
function getUsernameAndPasswordFromDb($name)
{
	return ['admin', md5('heslo')];
}
