<?php

namespace Neputer\Mixins;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Trait Responsable
 * @package Foundation\Mixins
 */
trait Responsable
{

    /**
     * @param $body
     * @param array $metas
     * @param $status
     * @return JsonResponse
     */
    public function neputerResponse($body, $metas = [], $status)
    {
        return response()
            ->json([
                'body' => $body,
                'metas' => $metas
            ], $status);
    }

    public function responseOk($body, $metas = [])
    {
        return $this->neputerResponse($body, $metas, Response::HTTP_OK);
    }

    public function responseErr($body, $status = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return $this->neputerResponse($body, [], $status);
    }

}
