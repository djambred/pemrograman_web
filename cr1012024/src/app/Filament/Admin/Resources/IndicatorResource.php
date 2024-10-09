<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\IndicatorResource\Pages;
use App\Models\Indicator;
use Filament\Forms;
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
        return $form
            ->schema([
                Forms\Components\Select::make('domain_id')->nullable()->relationship('domain', 'name'),
                Forms\Components\Select::make('aspect_id')->nullable()->relationship('aspect', 'name'),
                Forms\Components\Textarea::make('name'),
                Forms\Components\Textarea::make('detail')->nullable(),
                Forms\Components\Textarea::make('description')->nullable(),
                Forms\Components\Textarea::make('score_criteria')->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('domain.name')->label('Domain'),
                Tables\Columns\TextColumn::make('aspect.name')->label('Aspect'),
                Tables\Columns\TextColumn::make('detail')->label('Detail'),
                Tables\Columns\TextColumn::make('description')->label('Description'),
                Tables\Columns\TextColumn::make('score_criteria')->label('Score Criteria'),
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
            'index' => Pages\ListIndicators::route('/'),
            'create' => Pages\CreateIndicator::route('/create'),
            'edit' => Pages\EditIndicator::route('/{record}/edit'),
        ];
    }

    // public static function sidebarCollapsibleOnDesktop(bool $value): static
    // {
    //     return static::setSidebarCollapsibleOnDesktop($value);
    // }
}
