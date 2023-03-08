<?php

namespace MarJose123\FilamentRecordPeek\Tables\Actions;

use Closure;
use Filament\Forms\ComponentContainer;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class PeekAction extends Action
{
    protected ?Closure $mutateRecordDataUsing = null;

    public static function getDefaultName(): ?string
    {
        return 'peek';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Peek Record');
        $this->tooltip = "Peek record";

        $this->color('secondary');

        $this->icon('heroicon-s-arrows-expand');

        $this->groupedIcon('heroicon-s-arrows-expand');

        $this->form(fn($livewire) => invade($livewire)->getResourceForm(columns: 2, isDisabled: true)->getSchema());

        $this->modalHeading(fn(): string => __('filament-support::actions/view.single.modal.heading', ['label' => $this->getRecordTitle()]));

        $this->modalActions(fn(): array => array_merge(
            $this->getExtraModalActions(),
            [
                $this->getModalCancelAction()->label(__('filament-support::actions/view.single.modal.actions.close.label')),
            ],
        ));

        $this->disableForm();

        $this->mountUsing(function (ComponentContainer $form, Model $record): void {
            $data = $record->attributesToArray();

            if ($this->mutateRecordDataUsing) {
                $data = $this->evaluate($this->mutateRecordDataUsing, ['data' => $data]);
            }

            $form->fill($data);
        });

        $this->action(static function (): void {
        });

        $this->slideOver(true);
    }

    public function mutateRecordDataUsing(?Closure $callback): static
    {
        $this->mutateRecordDataUsing = $callback;

        return $this;
    }
}
