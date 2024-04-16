<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailsResource\Pages;
use App\Filament\Resources\DetailsResource\RelationManagers;
use App\Models\Details;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailsResource extends Resource
{
    protected static ?string $modelLabel = 'Detalhe de Usuário';

    protected static ?string $pluralModelLabel = 'Detalhes de Usuários';

    protected static ?string $model = Details::class;

    protected static ?string $slug = 'detalhes-de-usuarios';

    protected static ?string $navigationLabel = 'Detalhes de Usuários';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Usuários';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('status')
                    ->required(),
                Toggle::make('featured_homepage')
                    ->label('Apresentar na página inicial')
                    ->required(),
                Textarea::make('about')
                    ->label('Sobre')
                    ->columnSpanFull(),
                TextInput::make('website')
                    ->maxLength(255),
                TextInput::make('lattes')
                    ->label('Currículo Lattes')
                    ->maxLength(255),
                TextInput::make('linkedin')
                    ->maxLength(255),
                TextInput::make('github')
                    ->maxLength(255),
                TextInput::make('facebook')
                    ->maxLength(255),
                TextInput::make('twitter')
                    ->maxLength(255),
                TextInput::make('instagram')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Nome')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean()
                    ->trueIcon('heroicon-s-hand-thumb-up')
                    ->falseIcon('heroicon-s-hand-thumb-down'),
                Tables\Columns\IconColumn::make('featured_homepage')
                    ->boolean()
                    ->sortable()
                    ->trueIcon('heroicon-s-hand-thumb-up')
                    ->falseIcon('heroicon-s-hand-thumb-down'),
                Tables\Columns\TextColumn::make('about')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('website')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('lattes')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('linkedin')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('github')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('twitter')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('instagram')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ManageDetails::route('/'),
        ];
    }
}
