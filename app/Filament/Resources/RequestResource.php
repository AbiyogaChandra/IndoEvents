<?php

namespace App\Filament\Resources;

use App\Models\Request as RequestModel;
use App\Models\Event;
use App\Filament\Resources\RequestResource\Pages;
use App\Filament\Resources\RequestResource\RelationManagers;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $modelLabel = 'Permintaan';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\DateTimePicker::make('event_time')->required(),
                Forms\Components\TextInput::make('location')->required(),
                Forms\Components\TextInput::make('ticket_price')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ticket_price'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('approve')
                    ->label('Setujui')
                    ->icon('heroicon-o-check-circle')
                    ->action(function (Request $request) {
                        
                        if ($request->type === 'create') {
                            $event = Event::create([
                                'title' => $request->title,
                                'description' => $request->description,
                                'event_time' => $request->event_time,
                                'location' => $request->location,
                                'ticket_price' => $request->ticket_price,
                                'profile_id' => $request->profile_id, 
                            ]);
                        } elseif ($request->type === 'update') {
                            $event = Event::findOrFail($request->event_id);
                            $event->update([
                                'title' => $request->title,
                                'description' => $request->description,
                                'event_time' => $request->event_time,
                                'location' => $request->location,
                                'ticket_price' => $request->ticket_price,
                            ]);
                        }

                        $request->delete(); 
                    })
                    ->requiresConfirmation(),
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
            'index' => Pages\ListRequests::route('/'),
            'create' => Pages\CreateRequest::route('/create'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
