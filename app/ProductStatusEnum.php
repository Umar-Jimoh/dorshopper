<?php

namespace App;

enum ProductStatusEnum: string
{
    case Draft = 'draft';
    case Published = 'published';

    public static function labels(): array {
        return [
            self::Draft->value => __('Draft'),
            self::Published->value => __('Published')
        ];
    }

    public static function colors(): array {
        return [
            'grey' => self::Draft->value,
            'success' => self::Published->value
        ];
    }
}