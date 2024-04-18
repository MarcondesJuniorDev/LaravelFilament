<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YearResource\Pages;
use App\Filament\Resources\YearResource\RelationManagers;
use App\Models\Year;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YearResource extends Resource
{
    protected static ?string $modelLabel = 'Ano Letivo';

    protected static ?string $pluralModelLabel = 'Anos Letivos';

    protected static ?string $model = Year::class;

    protected static ?string $slug = 'anos-letivos';

    protected static ?string $navigationLabel = 'Anos Letivos';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Learning Management System';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        $storedYears = Year::pluck('year')->toArray();
        $rangeYears = range(date('Y'), 2005, -1);
        $availableYears = array_diff($rangeYears, $storedYears);
        $availableYears = array_values($availableYears);
        $availableYears = array_combine($availableYears, $availableYears);
        return $form
            ->schema([
                Select::make('year')
                    ->label('Ano Letivo')
                    ->options($availableYears)
                    ->required(),
                Toggle::make('current_year')
                    ->label('Atual')
                    ->onIcon('heroicon-s-check')
                    ->offIcon('heroicon-s-x-mark')
                    ->required(),
                Select::make('author_id')
                    ->label('Autor')
                    ->relationship('author', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(array(
                TextColumn::make('year')
                    ->label('Ano Letivo')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('current_year')
                    ->label('Ano Corrente')
                    ->trueIcon('heroicon-s-hand-thumb-up')
                    ->falseIcon('heroicon-s-hand-thumb-down')
                    ->boolean(),
                TextColumn::make('author.name')
                    ->label('Autor')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Atualizado em')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ))
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                ->label('Editar'),
                DeleteAction::make()
                ->label('Deletar'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                    ->label('Deletar Todos'),
                ])->label('Ações em Massa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageYears::route('/'),
        ];
    }
}
