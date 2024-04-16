<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonContentResource\Pages;
use App\Filament\Resources\LessonContentResource\RelationManagers;
use App\Models\LessonContent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonContentResource extends Resource
{
    protected static ?string $modelLabel = 'Conteúdo de Aula';

    protected static ?string $pluralModelLabel = 'Conteúdos de Aulas';

    protected static ?string $model = LessonContent::class;

    protected static ?string $slug = 'conteudo-das-aulas';

    protected static ?string $navigationLabel = 'Conteúdo das Aulas';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Learning Management System';

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lesson_id')
                    ->relationship('lesson', 'title')
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('is_main')
                    ->required(),
                Forms\Components\Toggle::make('is_file')
                    ->required(),
                Forms\Components\TextInput::make('content_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('content_path')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lesson.title')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_main')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_file')
                    ->boolean(),
                Tables\Columns\TextColumn::make('content_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('content_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLessonContents::route('/'),
        ];
    }
}
