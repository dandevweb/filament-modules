<?php

declare(strict_types=1);

namespace App\Enums;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ChargeStatusEnum: string implements HasLabel, HasColor, HasIcon
{

    case PENDING = 'pending';
    case OVERDUE = 'overdue';
    case PAID = 'paid';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::PENDING => 'Pendente',
            self::OVERDUE => 'Vencido',
            self::PAID => 'Pago',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::PENDING => 'gray',
            self::OVERDUE => 'danger',
            self::PAID => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::PENDING => 'heroicon-o-clock',
            self::OVERDUE => 'heroicon-o-clock',
            self::PAID => 'heroicon-o-check',
        };
    }
}
