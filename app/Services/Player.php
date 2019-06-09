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

    public function find($id)
    {
        return $this->playerRepository->findFirst('player_id', $id);
    }

    public function update(array $params, $id)
    {
        return $this->playerRepository->update($params, $id);
    }
}
