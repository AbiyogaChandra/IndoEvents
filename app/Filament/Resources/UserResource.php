<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $modelLabel = 'Akun';

    protected static ?string $navigationIcon = 'heroicon-o-user';
    //protected static ?string $activeNavigationIcon = 'heroicon-s-user';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Group::make([
                Forms\Components\TextInput::make('username')
                    ->label('Nama Akun')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('email')
                    ->label('Alamat E-Mail')
                    ->email()
                    ->required()
                    ->maxLength(320),
                Forms\Components\TextInput::make('password')
                    ->label('Kata Sandi')
                    ->password()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('profile_id')
                    ->label('ID Profil')
                    ->required()
                    ->visible(fn ($get) => $get('id') !== null),
            ])->label('Akun'),

            Forms\Components\Group::make([
                Forms\Components\TextInput::make('profile.display_name')
                    ->label('Nama Lengkap')
                    ->required(),
                Forms\Components\FileUpload::make('profile.profile_photo')
                    ->label('Foto Profil')
                    ->disk('public')
                    ->directory('uploads'),
            ])->label('Profil')
            ->hidden(fn ($get) => $get('id') !== null),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('username')
                    ->label('Nama Akun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Alamat E-Mail'),
                Tables\Columns\TextColumn::make('profile_id')
                    ->label('ID Profil')
                    ->formatStateUsing(fn (User $record) => sprintf('%d (Lihat)', $record->profile_id))
                    ->color('primary')
                    ->url(
                        fn (User $record) => ProfileResource::getUrl(
                            'view', [
                                'record' => $record->profile_id
                            ]
                        )
                    ),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(fn (User $record) => static::getUrl('view', ['record' => $record->getKey()]));
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'view' => Pages\ViewUser::route('/{record}/view')
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('username')
                    ->label('Nama Akun'),
                Infolists\Components\TextEntry::make('email')
                    ->label('Alamat E-Mail'),
                Infolists\Components\TextEntry::make('profile.display_name')
                    ->label('Nama Lengkap'),
                Infolists\Components\ImageEntry::make('profile.profile_photo')
                    ->label('Foto Profil'),
            ]);
    }

    public static function saving(User $user, $form)
    {
        $profile = $user->profile()->updateOrCreate([], [
            'display_name' => $form->getState()['profile']['display_name'],
            'profile_photo' => $form->getState()['profile']['profile_photo'],
        ]);
        $user->profile()->associate($profile);
    }
}
