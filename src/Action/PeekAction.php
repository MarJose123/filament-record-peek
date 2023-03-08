<?php

namespace MarJose123\FilamentRecordPeek\Action;


use Filament\Tables\Actions\Action;


class PeekAction extends Action
{

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
