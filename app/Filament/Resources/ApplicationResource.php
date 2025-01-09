<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Filament\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('first_name')
                    ->label('First Name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('last_name')
                    ->label('Last Name')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->unique(ignoreRecord: true),
                
                TextInput::make('phone')
                    ->label('Phone')
                    ->required()
                    ->maxLength(20),
                
                DatePicker::make('date_of_birth')
                    ->label('Date of Birth')
                    ->required(),
                
                Select::make('gender')
                    ->label('Gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other',
                    ])
                    ->required(),
                
                Select::make('education')
                    ->label('Highest Level of Education')
                    ->options([
                        'highschool' => 'High School',
                        'diploma' => 'Diploma',
                        'bachelor' => "Bachelor's Degree",
                        'master' => 'Master\'s Degree',
                        'doctorate' => 'Doctorate',
                    ])
                    ->required(),
                
                // TextInput::make('institution')
                //     ->label('Institution')
                //     ->required()
                //     ->maxLength(255),
                
                // Select::make('job_title')
                //     ->label('Job Title')
                //     ->options([
                //         'student' => 'Student',
                //         'intern' => 'Intern',
                //         'junior' => 'Junior Position',
                //         'senior' => 'Senior Position',
                //         'other' => 'Other',
                //     ])
                //     ->required(),

                Select::make('course')
                    ->label('Course')
                    ->options([
                        'web_dev' => 'Web Development 1',
                        'web_dev_2' => 'Web Development 2',
                        
                    ])
                    ->required(),
                
                Select::make('preferred_intake')
                    ->label('Preferred Intake')
                    ->options([
                        'january' => 'January Intake',
                        'may' => 'May Intake',
                        'september' => 'September Intake',
                    ])
                    ->required(),
                
                Select::make('referral')
                    ->label('How did you hear about us?')
                    ->options([
                        'friends' => 'Friends',
                        'social_media' => 'Social Media',
                        'website' => 'Website',
                        'advertisement' => 'Advertisement',
                        'other' => 'Other',
                    ])
                    ->required(),
                
                Textarea::make('additional_info')
                    ->label('Additional Information')
                    ->maxLength(500),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('first_name')->label('First Name')->searchable(),
                TextColumn::make('last_name')->label('Last Name')->searchable(),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('phone')->label('Phone'),
                TextColumn::make('created_at')
                    ->label('Submitted On')
                    ->dateTime('F j, Y, g:i a')
                    ->sortable(),
                TextColumn::make('date_of_birth')->label('DOB'),
                TextColumn::make('gender')->label('Gender'),
                TextColumn::make('education')->label('Education'),
                // TextColumn::make('institution')->label('Institution'),
                // TextColumn::make('job_title')->label('Job Title'),
                TextColumn::make('course')->label('Course'),
                TextColumn::make('referral')->label('Referral'),

                TextColumn::make('preferred_intake')->label('Preferred Intake'),
                
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
