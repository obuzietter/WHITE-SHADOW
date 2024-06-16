<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageResource\Pages;
use App\Filament\Resources\ImageResource\RelationManagers;
use App\Models\Image;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageResource extends Resource
{
    protected static ?string $model = Image::class;

    protected static ?string $navigationIcon = 'heroicon-s-banknotes';
    protected static ?string $navigationLabel = 'Gallery';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('path')
                    ->image()
                    ->imageEditor()
                    ->directory('gallery_images')
                    ->moveFiles()
                    ->multiple(),
                Select::make('category')
                    ->options([
                        'people_portraits' => 'People and Portraits',
                        'nature_wildlife' => 'Nature and Wildlife',
                        // 'travel_places' => 'Travel and Places',
                        // 'sports_action' => 'Sports and Action',
                        'art_abstract' => 'Art and Abstract',
                        'events_occasions' => 'Events and Occasions',
                        'food_drink' => 'Food and Drink',
                        // 'lifestyle_hobbies' => 'Lifestyle and Hobbies',
                        // 'technology_industry' => 'Technology and Industry',
                        'commercial_business' => 'Commercial and Business',
                        'fashion_beauty' => 'Fashion and Beauty',
                        // 'architecture_interiors' => 'Architecture and Interiors',
                        'seasonal_holidays' => 'Seasonal and Holidays',
                        'science_technology' => 'Science and Technology',
                        // 'education_learning' => 'Education and Learning',
                        // 'emotions_expressions' => 'Emotions and Expressions',
                        
                    ])
                    ->selectablePlaceholder(false)

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('path')
                    ->square()
                    ->width(75)
                    ->height(75),

            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImage::route('/create'),
            'edit' => Pages\EditImage::route('/{record}/edit'),
        ];
    }
}
