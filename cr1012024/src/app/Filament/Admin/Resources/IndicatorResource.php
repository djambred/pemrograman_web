<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\IndicatorResource\Pages;
use App\Models\Indicator;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class IndicatorResource extends Resource
{
    protected static ?string $model = Indicator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 0;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Domain')
                ->description('Select Domain')
                ->schema([
                    Forms\Components\Select::make('domain_id')
                        ->label('Domain')
                        ->relationship('domain', 'name')
                        ->nullable(),
                ]),

            Section::make('Aspect')
                ->description('Select Aspect')
                ->schema([
                    Forms\Components\Select::make('aspect_id')
                        ->label('Aspect')
                        ->relationship('aspect', 'name')
                        ->nullable(),
                ]),

            Section::make('Indicator')
                ->description('Indicator Details')
                ->schema([
                    Forms\Components\Textarea::make('name')
                        ->label('Indicator Name')
                        ->rows(5)
                        ->required(),
                    Forms\Components\Textarea::make('other_name')
                        ->label('Other Name')
                        ->rows(5)
                        ->nullable(),
                ]),

            Section::make('Indicator Detail')
                ->description('Detailed Description of the Indicator')
                ->schema([
                    Forms\Components\Textarea::make('detail')
                        ->label('Detail')
                        ->rows(5)
                        ->nullable(),
                ]),

            Section::make('Indicator Description')
                ->description('Description of the Indicator')
                ->schema([
                    Forms\Components\Textarea::make('description')
                        ->label('Description')
                        ->rows(5)
                        ->nullable(),
                ]),

            Section::make('Indicator Evidence')
                ->description('Score Criteria for the Indicator')
                ->schema([
                    Forms\Components\Textarea::make('score_criteria')
                        ->label('Score Criteria')
                        ->rows(5)
                        ->nullable(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('other_name')->wrap(),
                Tables\Columns\TextColumn::make('domain.name')->label('Domain')->wrap(),
                Tables\Columns\TextColumn::make('aspect.name')->label('Aspect')->wrap(),
                Tables\Columns\TextColumn::make('detail')->label('Detail')->wrap(),
                Tables\Columns\TextColumn::make('description')->label('Description')->wrap(),
                Tables\Columns\TextColumn::make('score_criteria')->label('Score Criteria')->wrap(),
            ])
            ->filters([])
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
            'index' => Pages\ListIndicators::route('/'),
            'create' => Pages\CreateIndicator::route('/create'),
            'edit' => Pages\EditIndicator::route('/{record}/edit'),
        ];
    }


}
