<?php

namespace MarJose123\FilamentRecordPeek\Action;

use Filament\Pages\Actions\Action;
use Filament\Support\Actions\Concerns\CanCustomizeProcess;

class PeekAction extends Action
{
    use CanCustomizeProcess;

    public static function getDefaultName(): ?string
    {
        return 'peek';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Peek');

        $this->color('secondary');

        $this->groupedIcon('heroicon-s-arrows-expand');
    }

}
