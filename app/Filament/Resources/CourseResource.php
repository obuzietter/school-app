<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('badge')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image_url')
                    ->required()
                    ->label('Image'),
                Forms\Components\Textarea::make('course_description')
                    ->required()
                    ->label('Description'),
                Forms\Components\Textarea::make('prerequisites')
                    ->required(),
                Forms\Components\Repeater::make('learning_schedule')
                    ->label('Learning Schedule')
                    ->schema([
                        Forms\Components\TextInput::make('week')
                            ->label('Schedule Item')
                            ->required(),
                    ])
                    ->default([])
                    ->columnSpan('full'),
                Forms\Components\Repeater::make('highlights')
                    ->label('Highlights')
                    ->schema([
                        Forms\Components\TextInput::make('highlight')
                            ->label('Highlight Item')
                            ->required(),
                    ])
                    ->default([])
                    ->columnSpan('full'),
                Forms\Components\Toggle::make('is_enabled')
                    ->label('Enabled')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

              
            
                Tables\Columns\ViewColumn::make('learning_schedule')
                ->label('Learning Schedule')
                ->view('fil-components.learning_schedule'),
                Tables\Columns\ViewColumn::make('highlights')
                ->label('Course Highlights')
                ->view('fil-components.course_highlights'),


                Tables\Columns\TextColumn::make('badge')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image_url')
                    ->label('Image'),
                Tables\Columns\BooleanColumn::make('is_enabled')
                    ->label('Enabled'),



                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_enabled')->label('Enabled'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
