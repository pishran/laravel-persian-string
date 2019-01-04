<?php

namespace Pishran\LaravelPersianString;

trait HasPersianString
{
    public static function bootHasPersianString()
    {
        static::saving(function ($model) {
            if (empty(static::$persianStrings)) {
                return;
            }

            $ps = app('PersianString');

            foreach (static::$persianStrings as $persianString) {
                $model->{$persianString} = $ps->convert($model->{$persianString});
            }
        });
    }
}
