<?php

namespace App\Services;

use App\Repositories\PlayerRepository;

class Player
{
    private $playerRepository;

    public function __construct()
    {
        $this->playerRepository = new PlayerRepository();
    }

    public function create(array $params)
    {
        return $this->playerRepository->create($params);
    }
}
