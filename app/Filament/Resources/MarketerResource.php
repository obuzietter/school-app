<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarketerResource\Pages;
use App\Filament\Resources\MarketerResource\RelationManagers;
use App\Models\Marketer;
use Closure;
use Filament\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action as ActionsAction;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms\Components\Button;
use Filament\Pages\Actions\Modal\Actions\ButtonAction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MarketerResource extends Resource
{
    protected static ?string $model = Marketer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make([
                TextInput::make('name')
                    ->label('Marketer Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required()
                    ->unique('marketers', 'email'),
                    TextInput::make('referral_code')
                    ->label('Referral Code')
                    ->required()
                    ->unique('marketers', 'referral_code')
                    ->helperText('Click "Generate Code" to auto-generate a unique referral code.')
                    ->suffixAction(
                        ActionsAction::make('generateCode')
                        ->label('Generate Code')
                        ->action(function (Forms\Set $set) {
                            // Generate a unique 5-character referral code
                            $code = Str::upper(Str::random(5));
                            $set('referral_code', $code);
                        })
                    ),
                TextInput::make('students_referred')
                    ->label('Students Referred')
                    ->disabled(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Marketer Name')->sortable()->searchable(),
                TextColumn::make('email')->label('Email')->sortable()->searchable(),
                TextColumn::make('referral_code')->label('Referral Code'),
                TextColumn::make('students_referred')->label('Students Referred')->sortable(),
                TextColumn::make('created_at')->label('Date Created')->dateTime(),
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
            'index' => Pages\ListMarketers::route('/'),
            'create' => Pages\CreateMarketer::route('/create'),
            'edit' => Pages\EditMarketer::route('/{record}/edit'),
        ];
    }
}