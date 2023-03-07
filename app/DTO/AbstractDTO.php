<?php

namespace App\DTO;

use Illuminate\Contracts\Support\Arrayable;

abstract class AbstractDTO implements Arrayable
{
    public function all():array{
        return get_object_vars($this);
    }

    public function toArray():array{
        // return (array) $this; // maneira alternativa
        return $this->all();
    }
}
