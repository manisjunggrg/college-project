<?php

namespace Kathford\Mixins;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Trait Responsible
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
    public function KathfordResponse($body, $metas = [], $status): JsonResponse
    {
        return response()
            ->json([
                'body' => $body,
                'metas' => $metas
            ], $status);
    }

    public function responseOk($body, $metas = [])
    {
        return $this->KathfordResponse($body, $metas, Response::HTTP_OK);
    }

    public function responseErr($body, $status = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return $this->KathfordResponse($body, [], $status);
    }

}
