<?php

namespace App;

class Gramaticus {
	
	public function checkInfinitive(string $verb): bool
	{
		$shortExtention = substr($verb, -2);
		$longExtention = substr($verb, -3);

		switch ($shortExtention || $longExtention) {
			case 'ti':
				return true;
				break;

			case 'ći':
				return true;
				break;

			case 'sti':
				return true;
				break;
			
			default:
				return false;
				break;
		}
	}

	public function infinitiveBase(string $verb): string
	{
		return substr($verb, 0, -2);
	}
}