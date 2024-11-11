<?php
namespace App\Enums;

enum DataType: string {
    case VARCHAR = 'VARCHAR';
    case TEXT = 'TEXT';
    case INT = 'INT';
    case BOOLEAN = 'BOOLEAN';
    case FLOAT = 'FLOAT';

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
