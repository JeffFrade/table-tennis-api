<?php

namespace App\Repositories;

use App\Repositories\Collections\Player;

class PlayerRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new Player();
    }
}
