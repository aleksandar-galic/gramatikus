<?php

use App\Gramaticus;
use PHPUnit\Framework\TestCase;

class GramaticsTest extends TestCase
{
	/** @test */
	function it_checks_for_infinitive_case_of_a_verb_with_extention_TI()
	{
		$gramaticus = new Gramaticus();

		$verb = 'odraditi';

		$this->assertTrue($gramaticus->checkInfinitive($verb));
	}

	/** @test */
	function it_checks_for_infinitive_case_of_a_verb_with_extention_STI()
	{
		$gramaticus = new Gramaticus();

		$verb = 'odrasti';

		$this->assertTrue($gramaticus->checkInfinitive($verb));
	}

	/** @test */
	function it_checks_for_infinitive_case_of_a_verb_with_extention_ĆI()
	{
		$gramaticus = new Gramaticus();

		$verb = 'odreći';

		$this->assertTrue($gramaticus->checkInfinitive($verb));
	}

	/** @test */
	function it_makes_an_infinitive_base_of_a_verb_with_extention_TI()
	{
		$gramaticus = new Gramaticus();

		$verb = 'preterati';

		$this->assertEquals('pretera', $gramaticus->infinitiveBase($verb));
	}

	// /** @test */
	// function it_makes_an_infinitive_base_of_a_verb_with_extention_STI()
	// {
	// 	$gramaticus = new Gramaticus();

	// 	$verb = 'odrasti';

	// 	$this->assertEquals('pretera', $gramaticus->infinitiveBase($verb));
	// }

	/** @test */
	function it_makes_an_infinitive_base_of_a_verb_with_extention_ĆI()
	{
		$gramaticus = new Gramaticus();

		$verb = 'odreći';

		$this->assertEquals('odrekos', $gramaticus->infinitiveBase($verb));
	}

}