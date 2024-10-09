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
                Forms\Components\Select::make('detail_leveling_index_id')->nullable()->relationship('detailLevelingIndex', 'detail'),
                Forms\Components\Select::make('recomendation_id')->nullable()->relationship('recomendation', 'recommend'),
                Forms\Components\Textarea::make('note'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')->label('Lokus'),
                Tables\Columns\TextColumn::make('indicator.name')->label('Indikator'),
                Tables\Columns\TextColumn::make('leveling.name')->label('Level'),
                Tables\Columns\TextColumn::make('detailLevelingIndex.detail')->label('Detail Leveling Index'),
                Tables\Columns\TextColumn::make('recomendation.recommend'),
                Tables\Columns\TextColumn::make('note')->searchable(),
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
