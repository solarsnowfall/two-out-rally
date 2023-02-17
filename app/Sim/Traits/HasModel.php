<?php

namespace App\Sim\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasModel
{
    protected Model $model;

    public function __get(string $name)
    {
        $class = Str::snake(class_basename($this));

        return $class === $name ? $this->model : null;
    }

    public function __set(string $name, mixed $value)
    {
        $class = Str::snake(class_basename($this));

        if ($class === $name) {
            $this->model = $value;
        }
    }
}
