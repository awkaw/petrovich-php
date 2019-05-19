<?php
namespace StaticallTest\Petrovich\Petrovich\Ruleset;

use PHPUnit\Framework\TestCase;

use Staticall\Petrovich\Petrovich\Ruleset;

class ValidateValueKeyTestTest extends TestCase
{
    public function testNoSuchKey()
    {
        $validator = new Ruleset\Validator;

        static::assertTrue($validator->validateValueKeyTest([]));
    }

    public function testRuleIsInvalidType()
    {
        $validator = new Ruleset\Validator;

        static::assertFalse(
            $validator->validateValueKeyTest(
                [
                    Ruleset::VALUE_KEY_TEST => 'test',
                ]
            )
        );
    }

    public function testRuleIsValidType()
    {
        $validator = new Ruleset\Validator;

        static::assertTrue(
            $validator->validateValueKeyTest(
                [
                    Ruleset::VALUE_KEY_TEST => [
                        'test',
                    ],
                ]
            )
        );
    }
}
