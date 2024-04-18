<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LessonResource\Pages;
use App\Filament\Resources\LessonResource\RelationManagers;
use App\Models\Lesson;
use Filament\Actions\ExportAction;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LessonResource extends Resource
{
    protected static ?string $modelLabel = 'Aula';

    protected static ?string $pluralModelLabel = 'Aulas';

    protected static ?string $model = Lesson::class;

    protected static ?string $slug = 'aulas';

    protected static ?string $navigationLabel = 'Aulas';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Learning Management System';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Capa')
                    ->columnSpanFull()
                    ->image(),
                TextInput::make('code')
                    ->label('Código Único')
                    ->required()
                    ->unique()
                    ->maxLength(255),
                TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->unique()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->default(fn () => \Illuminate\Support\Str::slug(request('title')))
                    ->required()
                    ->unique()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->label('Descrição')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
                        'PUBLICADO' => 'Publicado',
                        'RASCUNHO' => 'Rascunho',
                        'PENDENTE' => 'Pendente',
                    ])
                    ->required(),
                TextInput::make('tags')
                    ->maxLength(255),
                DatePicker::make('lesson_date'),
                TextInput::make('author_id')
                    ->default(fn() => auth()->id())
                    ->required()
                    ->numeric(),
                Select::make('grade_id')
                    ->label('Série')
                    ->relationship('grade', 'title')
                    ->required(),
                Select::make('year_id')
                    ->label('Ano Letivo')
                    ->relationship('year', 'year')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Capa'),
                TextColumn::make('code')
                    ->label('Código Único')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title')
                    ->label('Título')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (Lesson $lesson) => match ($lesson->status) {
                        'PUBLICADO' => 'success',
                        'RASCUNHO' => 'warning',
                        'PENDENTE' => 'danger',
                    })
                    ->sortable(),
                TextColumn::make('tags')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('lesson_date')
                    ->date(format: 'd/m/Y')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('author_id')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('grade.title')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('year.id')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make()
                    ->label('Editar'),
                DeleteAction::make()
                    ->label('Excluir'),

            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    Tables\Actions\ExportBulkAction::make(),
                ])->label('Ações em Massa'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLessons::route('/'),
        ];
    }
}
