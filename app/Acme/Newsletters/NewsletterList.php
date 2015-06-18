<?php

namespace Acme\Newsletters;

interface NewsletterList 
{
	/**
	 * Subscribe user to a list
	 *
	 * @param	$list
	 * @param	$email
	 * @return	mixed
	 */  
	public function subscribeTo($list, $email);

	/**
	 * Unsubscribe user
	 *
	 * @param	$list
	 * @param	$email
	 * @return	mixed
	 */  
	public function unsubscribeFrom($list, $email);
}