<?php

namespace App\Http;

use App\Core\Support\Controller;
use App\Core\Support\Error;
use App\Services\Player;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PlayerController extends Controller
{
    use Error;

    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    public function index(Request $request)
    {
        try {
            $players = $this->player->index($request->all());
            return response()->json(['status' => 200, 'data' => $players], Response::HTTP_OK);
        } catch (\Exception $e) {
            $this->getError($e);
            return response()->json(['status' => 500, 'data' => null], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function store(Request $request)
    {
        try {
            $player = $this->player->create($request->all());
            return response()->json(['status' => 200, 'data' => $player], Response::HTTP_OK);
        } catch (\Exception $e) {
            $this->getError($e);
            return response()->json(['status' => 500, 'data' => null], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function find($id)
    {
        try {
            $player = $this->player->find($id);
            return response()->json(['status' => 200, 'data' => $player], Response::HTTP_OK);
        } catch (\Exception $e) {
            $this->getError($e);
            return response()->json(['status' => 500, 'data' => null], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $player = $this->player->update($request->all(), $id);
            return response()->json(['status' => 200, 'data' => $player], Response::HTTP_OK);
        } catch (\Exception $e) {
            $this->getError($e);
            return response()->json(['status' => 500, 'data' => null], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
