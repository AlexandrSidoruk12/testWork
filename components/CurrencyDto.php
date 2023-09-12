<?php

namespace app\components;

class CurrencyDto
{
    public string $name;
    public string $num_code;
    public string $name_code;
    public float $rate;
    public string $date_for_parse;

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}