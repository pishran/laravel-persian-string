<?php

namespace Pishran\LaravelPersianString;

trait HasPersianString
{
    public static function bootHasPersianString()
    {
        $ps = app('PersianString');

        static::saving(function ($model) use ($ps) {
            foreach ($model->getPersianStrings() as $persianString) {
                if (is_string($model->{$persianString})) {
                    $model->{$persianString} = $ps->convert($model->{$persianString});
                }
            }
        });
    }

    public function getPersianStrings()
    {
        return property_exists($this, 'persianStrings') ? $this->persianStrings : [];
    }
}
