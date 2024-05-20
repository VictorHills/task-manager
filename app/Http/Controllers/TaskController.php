<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

/**
 * @group Tasks Endpoints
 */
class TaskController extends Controller
{
    /**
     * Display a listing of Tasks.
     * @param Request $request
     * @return AnonymousResourceCollection|JsonResponse
     * @throws Throwable
     * @queryParam term string Search query parameter for string data type
     * @queryParam per_page int Items per page
     * @apiResourceCollection App\Http\Resources\TaskResource
     * @apiResourceModel App\Models\Task
     */
    public function index(Request $request): AnonymousResourceCollection|JsonResponse
    {
        try {
            $user = Auth::user();
            $per_page = $request->get('per_page') ?: 20;
            $term = $request->get('term') ?: '';
            $task = Task::where('created_by', $user->id)
                ->search($term)
                ->latest();

            return TaskResource::collection($task->paginate($per_page));
        } catch (QueryException) {
            return $this->respondBadRequest('Tasks not fetched successfully, please contact admin');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }
    }

    /**
     * Store a newly created Task.
     * @param TaskRequest $taskRequest
     * @return JsonResponse
     * @apiResourceCollection App\Http\Resources\TaskResource
     * @apiResourceModel App\Models\Task
     */
    public function store(TaskRequest $taskRequest): JsonResponse
    {
        try {
            $task = Task::create($taskRequest->validated());
            event(new TaskEvent($task));

            return $this->respondSuccessWithData('Task created Successfully', new TaskResource($task));
        } catch (QueryException) {
            return $this->respondBadRequest('Tasks not created successfully, please contact admin');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }
    }

    /**
     * Display the specified Task.
     * @param int $id
     * @return JsonResponse
     * @apiResourceCollection App\Http\Resources\TaskResource
     * @apiResourceModel App\Models\Task
     * @throws Throwable
     */
    public function show(int $id): JsonResponse
    {
        try {
            $user = Auth::user();
            $task = Task::where('created_by', $user->id)
                ->where('id', $id)
                ->first();

            throw_if(!$task, NotFoundHttpException::class, 'Task not found.');

            return $this->respondSuccessWithData('Task fetched Successfully', new TaskResource($task));
        } catch (QueryException) {
            return $this->respondBadRequest('Tasks not fetched successfully, please contact admin');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }
    }

    /**
     * Update the specified Task.
     * @param TaskRequest $taskRequest
     * @param int $id
     * @return JsonResponse
     * @throws Throwable
     * @apiResourceCollection App\Http\Resources\TaskResource
     * @apiResourceModel App\Models\Task
     */
    public function update(TaskRequest $taskRequest, int $id): JsonResponse
    {
        try {
            $user = Auth::user();
            $task = Task::where('created_by', $user->id)
                ->where('id', $id)
                ->first();

            throw_if(!$task, NotFoundHttpException::class, 'Task not found.');

            $task->update($taskRequest->validated());
            event(new TaskEvent($task));

            return $this->respondSuccessWithData('Task updated Successfully', new TaskResource($task));
        } catch (QueryException) {
            return $this->respondBadRequest('Tasks not updated successfully, please contact admin');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }
    }

    /**
     * Delete the specified Task.
     * @param int $id
     * @return JsonResponse
     * @throws Throwable
     * @apiResourceCollection App\Http\Resources\TaskResource
     * @apiResourceModel App\Models\Task
     */
    public function destroy(int $id): JsonResponse
    {
        try {
            $user = Auth::user();
            $task = Task::where('created_by', $user->id)
                ->where('id', $id)
                ->first();

            throw_if(!$task, NotFoundHttpException::class, 'Task not found.');

            $task->delete();
            event(new TaskEvent($task));

            return $this->respondSuccessWithData('Task has been deleted successfully', new TaskResource($task));
        } catch (QueryException) {
            return $this->respondBadRequest('Tasks not updated successfully, please contact admin');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }

    }
}
