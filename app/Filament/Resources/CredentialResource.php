<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CredentialResource\Pages;
use App\Filament\Resources\CredentialResource\RelationManagers;
use App\Models\Credential;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CredentialResource extends Resource
{
    protected static ?string $model = Credential::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')
                ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->default(fn() => Str::random(12)),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->sortable(),
                TextColumn::make('email')->sortable(),
                TextColumn::make('password')->sortable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
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

    public static function afterCreate(Model $record): void
    {
        $data = [
            'email' => $record->email,
            'password' => $record->password,
        ];
    
        // Send the email
        Mail::to($record->email)->send(new \App\Mail\SendCredentials($data));
    }
    


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCredentials::route('/'),
            'create' => Pages\CreateCredential::route('/create'),
            'edit' => Pages\EditCredential::route('/{record}/edit'),
        ];
    }
}
