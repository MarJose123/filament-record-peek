<?php

namespace MarJose123\FilamentRecordPeek\Tables\Action;


use Filament\Tables\Actions\ViewAction;


class PeekAction extends ViewAction
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

        $this->icon('heroicon-s-arrows-expand');

        $this->groupedIcon('heroicon-s-arrows-expand');

        $this->slideOver(true);

    }

}
