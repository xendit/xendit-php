<?php

namespace Xendit\Test;

use PHPUnit\Framework\TestCase;
use Xendit\ObjectSerializer;

class DummyEnum
{
    public const FIRST = 'FIRST';
    public const SECOND = 'SECOND';

    public static function getAllowableEnumValues()
    {
        return [
            self::FIRST,
            self::SECOND,
        ];
    }
}

final class ObjectSerializerTest extends TestCase
{
    public function testDeserializeEnumValidValue(): void
    {
        $result = ObjectSerializer::deserialize('FIRST', DummyEnum::class);
        $this->assertSame('FIRST', $result);
    }

    public function testDeserializeEnumInvalidValueDefaultsToLast(): void
    {
        $result = ObjectSerializer::deserialize('UNKNOWN', DummyEnum::class);
        $this->assertSame('SECOND', $result);
    }
}
