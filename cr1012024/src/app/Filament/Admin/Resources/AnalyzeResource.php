<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AnalyzeResource\Pages;
use App\Models\Analyze;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AnalyzeResource extends Resource
{
    protected static ?string $model = Analyze::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('subject_id')->nullable()->relationship('subject', 'name'),
                Forms\Components\Select::make('indicator_id')->nullable()->relationship('indicator', 'name'),
                Forms\Components\Select::make('leveling_index_id')->nullable()->relationship('leveling', 'name'),
                Forms\Components\Select::make('detail_leveling_index_id')->nullable()->relationship('detailLevelingIndex', 'name'),
                Forms\Components\Select::make('recomendation_id')->nullable()->relationship('recomendation', 'name'),
                Forms\Components\Textarea::make('note'),
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
            'index' => Pages\ListAnalyzes::route('/'),
            'create' => Pages\CreateAnalyze::route('/create'),
            'edit' => Pages\EditAnalyze::route('/{record}/edit'),
        ];
    }
}
