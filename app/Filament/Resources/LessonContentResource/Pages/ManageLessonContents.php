<?php

namespace App\Filament\Resources\LessonContentResource\Pages;

use App\Filament\Resources\LessonContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageLessonContents extends ManageRecords
{
    protected static string $resource = LessonContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
