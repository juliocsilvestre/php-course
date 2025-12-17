<?php

class Task
{
    private string $title;
    private string $description;
    private bool $completed;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }

    public function markAsCompleted(): void
    {
        $this->completed = true;
    }

    public function markAsIncomplete(): void
    {
        $this->completed = false;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isCompleted(): bool
    {
        return $this->completed;
    }
}

$task = new Task("Estudar PHP", "Praticar classes e métodos");

echo $task->getTitle();
echo $task->getDescription();
var_dump($task->isCompleted());

$task->markAsCompleted();
var_dump($task->isCompleted());
