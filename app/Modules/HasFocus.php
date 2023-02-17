<?php

namespace App\Modules;

use App\Models\Player\BatterSkill;

trait HasFocus
{
    public function focus()
    {
        if ($this instanceof BatterSkill) {
            return $this->batterFocus();
        }

        return $this->pitcherFocus();
    }

    protected function batterFocus()
    {

    }
}
