<?php

namespace App\Enums;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum Status: string implements HasLabel, HasColor
{

    case Backlog = 'backlog';
    case Todo = 'todo';
    case Doing = 'doing';
    case Testing = 'testing';
    case Done = 'done';

    public function getLabel(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return match ($this) {
            self::Backlog => 'gray',
            self::Todo => 'danger',
            self::Doing => 'warning',
            self::Testing => 'gray',
            self::Done => 'success',
        };
    }

}
