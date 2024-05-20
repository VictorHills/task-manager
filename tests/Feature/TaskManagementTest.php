<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;

class TaskManagementTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Passport::actingAs(User::factory()->create());
    }

    public function test_index_tasks_successfully()
    {
        $user = Auth::user();
        Task::factory()->count(5)->create(['created_by' => $user->id]);

        $response = $this->getJson('/api/tasks');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'title',
                        'description',
                        'completed',
                        'created_at',
                        'updated_at',
                    ],
                ],
            ]);
    }

    public function test_store_task_successfully()
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        $taskData = [
            'title' => 'New Task',
            'created_by' => $user->id,
            'description' => 'Task description',
            'completed' => false,
        ];

        $response = $this->postJson('/api/tasks', $taskData);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'id',
                    'title',
                    'created_by',
                    'description',
                    'completed',
                    'created_at',
                    'updated_at',
                ],
            ]);

        $this->assertDatabaseHas('tasks', ['title' => 'New Task']);
    }

    public function test_show_task_successfully()
    {
        $user = Auth::user();
        $task = Task::factory()->create(['created_by' => $user->id]);

        $response = $this->getJson('/api/tasks/' . $task->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'id',
                    'title',
                    'created_by',
                    'description',
                    'completed',
                    'created_at',
                    'updated_at',
                ],
            ]);
    }

    public function test_update_task_successfully()
    {
        $user = Auth::user();
        $task = Task::factory()->create(['created_by' => $user->id]);

        $updatedData = [
            'title' => 'Updated Task',
            'description' => 'Updated description',
            'completed' => true,
        ];

        $response = $this->putJson('/api/tasks/' . $task->id, $updatedData);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'id',
                    'title',
                    'description',
                    'created_by',
                    'completed',
                    'created_at',
                    'updated_at',
                ],
            ]);

        $this->assertDatabaseHas('tasks', ['title' => 'Updated Task']);
    }

    public function test_destroy_task_successfully()
    {
        $user = auth()->user();
        $task = Task::factory()->create(['created_by' => $user->id]);

        $response = $this->deleteJson('/api/tasks/' . $task->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'message',
                'data' => [
                    'id',
                    'title',
                    'created_by',
                    'description',
                    'completed',
                    'created_at',
                    'updated_at',
                ],
            ]);

        $this->assertSoftDeleted('tasks', ['id' => $task->id]);
    }
}
