<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RecomendationResource\Pages;
use App\Models\Recomendation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RecomendationResource extends Resource
{
    protected static ?string $model = Recomendation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('indicator_id')->nullable()->relationship('indicator', 'name'),
                Forms\Components\Select::make('leveling_index_id')->nullable()->relationship('indexLeveling', 'name'),
                Forms\Components\Select::make('detail_leveling_index_id')->nullable()->relationship('detailLevelingIndex', 'detail'),
                Forms\Components\Textarea::make('recommend'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('indicator.name')->label('Indicator'),
                Tables\Columns\TextColumn::make('indexLeveling.name')->label('Level'),
                Tables\Columns\TextColumn::make('detailLevelingIndex.detail')->label('Detail'),
                Tables\Columns\TextColumn::make('recommend')->searchable(),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListRecomendations::route('/'),
            'create' => Pages\CreateRecomendation::route('/create'),
            'edit' => Pages\EditRecomendation::route('/{record}/edit'),
        ];
    }
}
