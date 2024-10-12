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
                // Select for 'subject'
                Forms\Components\Select::make('subject_id')
                    ->label('Subject')
                    ->relationship('subject', 'name')
                    ->nullable(),

                // Select for 'indicator'
                Forms\Components\Select::make('indicator_id')
                    ->label('Indicator')
                    ->relationship('indicator', 'name')
                    ->nullable()
                    ->reactive(), // Mark this as reactive to trigger changes in dependent fields

                // Select for 'leveling_index_id'
                Forms\Components\Select::make('leveling_index_id')
                    ->label('Leveling Index')
                    ->relationship('leveling', 'name')
                    ->nullable()
                    ->reactive() // Mark this as reactive to trigger changes in dependent fields
                    ->afterStateUpdated(function (callable $set) {
                        // Reset the detail leveling index field when leveling index changes
                        $set('detail_leveling_index_id', null);
                    }),

                // Dependent select for 'detail_leveling_index_id' based on 'indicator_id' and 'leveling_index_id'
                Forms\Components\Select::make('detail_leveling_index_id')
                    ->label('Detail Leveling Index')
                    ->options(function ($get) {
                        $indicatorId = $get('indicator_id');
                        $levelingId = $get('leveling_index_id');

                        // Return options based on both 'indicator_id' and 'leveling_index_id'
                        if ($indicatorId && $levelingId) {
                            return \App\Models\DetailLevelingIndex::where('indicator_id', $indicatorId)
                                ->where('leveling_index_id', $levelingId)
                                ->pluck('detail', 'id')
                                ->toArray();
                        }

                        return [];
                    })
                    ->nullable(),

                // Select for 'recomendation_id'
                Forms\Components\Select::make('recomendation_id')
                    ->label('Recomendation')
                    ->relationship('recomendation', 'recommend')
                    ->nullable(),

                // Textarea for 'note'
                Forms\Components\Textarea::make('note')
                    ->label('Note'),
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
