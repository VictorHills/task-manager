<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Task;
use App\Events\TaskEvent;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskEventTest extends TestCase
{
    public function test_task_event_is_broadcast()
    {
        // Create a user and task
        $user = User::factory()->create();
        $task = Task::factory()->create(['created_by' => $user->id]);

        // Listen for the TaskEvent
        Event::fake([TaskEvent::class]);

        // Trigger the event
        event(new TaskEvent($task));

        // Assert the event was dispatched
        Event::assertDispatched(TaskEvent::class, function ($event) use ($task) {
            return $event->task->id === $task->id;
        });
    }

    public function test_task_event_broadcast_with_correct_data()
    {
        // Create a user and task
        $user = User::factory()->create();
        $task = Task::factory()->create(['created_by' => $user->id]);

        // Trigger the event
        $event = new TaskEvent($task);

        // Get the broadcast data
        $broadcastData = $event->broadcastWith();

        // Assert the broadcast data matches the task data
        $this->assertEquals($broadcastData['id'], $task->id);
        $this->assertEquals($broadcastData['title'], $task->title);
        $this->assertEquals($broadcastData['description'], $task->description);
        $this->assertEquals($broadcastData['completed'], $task->completed);
        $this->assertEquals($broadcastData['created_at'], $task->created_at->toDateTimeString());
        $this->assertEquals($broadcastData['updated_at'], $task->updated_at->toDateTimeString());
        $this->assertEquals($broadcastData['userDetails']->id, $user->id);
    }
}
