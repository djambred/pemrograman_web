<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DetailLevelingIndexResource\Pages;
use App\Models\DetailLevelingIndex;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DetailLevelingIndexResource extends Resource
{
    protected static ?string $model = DetailLevelingIndex::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = -2;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('leveling_index_id')->nullable()->label('Leveling_index')->relationship('levelingIndex', 'name'),
                Forms\Components\Textarea::make('detail'),
                Forms\Components\Textarea::make('description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

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
            'index' => Pages\ListDetailLevelingIndices::route('/'),
            'create' => Pages\CreateDetailLevelingIndex::route('/create'),
            'edit' => Pages\EditDetailLevelingIndex::route('/{record}/edit'),
        ];
    }
}
