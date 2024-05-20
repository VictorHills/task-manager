<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected int $statusCode = HttpResponse::HTTP_OK;

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode): static
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param string $message
     * @return JsonResponse
     */
    public function respondNotFound(string $message = 'Not Found!'): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_NOT_FOUND)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return JsonResponse
     */
    public function respondInternalError(string $message = 'Internal Server Error!'): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
    }

    /**
     * @param string $message
     * @return JsonResponse
     */
    public function respondBadRequest(string $message = 'Bad Request!'): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_BAD_REQUEST)->respondWithError($message);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function respondUnprocessed($message): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_UNPROCESSABLE_ENTITY)->respondWithError($message);
    }

    /**
     * @param $message
     * @param $data
     * @return JsonResponse
     */
    public function respondCreated($message, $data): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_CREATED)->respond([
            'code' => $this->getStatusCode(),
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function respondAccepted($message): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_ACCEPTED)->respond([
            'message' => $message
        ]);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function respondSuccess($message): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_OK)->respond([
            'code' => $this->getStatusCode(),
            'message' => $message
        ]);
    }

    /**
     * @param $message
     * @param $data
     * @return JsonResponse
     */
    public function respondSuccessWithData($message, $data): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_OK)->respond([
            'code' => $this->getStatusCode(),
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function respondUnauthorized($message): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_UNAUTHORIZED)->respond([
            'message' => $message
        ]);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function respondNotAllowed($message): JsonResponse
    {
        return $this->setStatusCode(HttpResponse::HTTP_FORBIDDEN)->respond([
            'message' => $message
        ]);
    }

    /**
     * @param Paginator $paginator
     * @param $data
     * @return JsonResponse
     */
    public function respondWithPagination(Paginator $paginator, $data): JsonResponse
    {
        $data = array_merge($data, [
            'paginator' => [
                'total_count' => $paginator->total(),
                'total_pages' => ceil($paginator->total() / $paginator->perPage()),
                'current_page' => $paginator->currentPage(),
                'limit' => $paginator->perPage()
            ]
        ]);
        return $this->respond($data);
    }

    /**
     * @param $data
     * @param array $header
     * @return JsonResponse
     */
    public function respond($data, array $header = []): JsonResponse
    {
        return Response::json($data, $this->getStatusCode(), $header);
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    public function respondWithError($message): JsonResponse
    {
        return $this->respond([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    /**
     * @param $data
     * @param $message
     * @return JsonResponse
     */
    public function respondWithMessageData($data, $message): JsonResponse
    {
        return $this->respond([
            'code' => $this->getStatusCode(),
            'data' => $data,
            'message' => $message
        ]);
    }
}
