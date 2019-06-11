<?php

namespace App\Services;

use App\Core\Support\Error;
use App\Repositories\Collections\Player as CPlayer;
use App\Repositories\PlayerRepository;

class Player
{
    use Error;

    private $playerRepository;
    private $cPlayer;

    public function __construct()
    {
        $this->playerRepository = new PlayerRepository();
        $this->cPlayer = new CPlayer();
    }

    public function index(array $params)
    {
        try {
            set_time_limit(0);
            ini_set('memory_limit', '8G');

            $items = $this->cPlayer;

            foreach ($params as $param => $value) {
                $items = $items->where($param, $value);
            }

            return $items->get();
        } catch (\Exception $e) {
            $this->getError($e);
            return null;
        }
    }

    public function create(array $params)
    {
        try {
            return $this->playerRepository->create($params);
        } catch (\Exception $e) {
            $this->getError($e);
            return null;
        }
    }

    public function find($id)
    {
        try {
            return $this->playerRepository->findFirst('player_id', $id);
        } catch (\Exception $e) {
            $this->getError($e);
            return null;
        }
    }

    public function update(array $params, $id)
    {
        try {
            return $this->playerRepository->update($params, $id);
        } catch (\Exception $e) {
            $this->getError($e);
            return null;
        }
    }
}
