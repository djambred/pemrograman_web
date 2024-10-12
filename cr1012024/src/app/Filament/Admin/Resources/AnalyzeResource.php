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
                    ->columnSpan('full')
                    ->relationship('subject', 'name')
                    ->nullable()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set) {
                        // Clear dependent fields when subject changes
                        $set('indicator_id', null);
                        $set('leveling_index_id', null);
                        $set('detail_leveling_index_id', null);
                    }),
    
                // Select for 'indicator'
                Forms\Components\Select::make('indicator_id')
                    ->label('Indicator')
                    ->relationship('indicator', 'name')
                    ->columnSpan('full')
                    ->nullable()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set) {
                        // Clear leveling index and detail leveling index when indicator changes
                        $set('leveling_index_id', null);
                        $set('detail_leveling_index_id', null);
                    }),
    
                // Select for 'leveling_index_id'
                Forms\Components\Select::make('leveling_index_id')
                    ->label('Leveling Index')
                    ->columnSpan('full')
                    ->options(function ($get) {
                        $indicatorId = $get('indicator_id');
                        
                        // Fetch options based on the selected indicator_id
                        if ($indicatorId) {
                            return \App\Models\LevelingIndex::where('indicator_id', $indicatorId)
                                ->pluck('name', 'id')
                                ->toArray();
                        }
    
                        return [];
                    })
                    ->nullable()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set) {
                        // Clear detail leveling index when leveling index changes
                        $set('detail_leveling_index_id', null);
                    }),
    
                // Dependent select for 'detail_leveling_index_id' based on 'indicator_id' and 'leveling_index_id'
                Forms\Components\Select::make('detail_leveling_index_id')
                    ->label('Detail Leveling Index')
                    ->columnSpan('full')
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
                ->columnSpan('full')
                    ->label('Recomendation')
                    ->relationship('recomendation', 'recommend')
                    ->nullable(),
    
                // Textarea for 'note'
                Forms\Components\Textarea::make('note')
                ->columnSpan('full')
                    ->label('Note'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('subject.name')->label('Lokus')->wrap(),
                Tables\Columns\TextColumn::make('indicator.name')->label('Indikator')->wrap(),
                Tables\Columns\TextColumn::make('leveling.name')->label('Level')->wrap(),
                Tables\Columns\TextColumn::make('detailLevelingIndex.detail')->label('Detail Leveling Index')->wrap(),
                Tables\Columns\TextColumn::make('recomendation.recommend')->wrap(),
                Tables\Columns\TextColumn::make('note')->searchable()->wrap(),
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
