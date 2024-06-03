<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Models\Client;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ClientListScreen extends Screen
{
    public $name = "Clients";

    public function query(): array
    {
        return [
            'clients' => Client::paginate()
        ];
    }

    public function commandBar(): array
    {
        return [
            Link::make('Create Client')
                ->route('platform.client.create'),
        ];
    }


    public function layout(): array
    {
        return [
            Table::make('clients')
                ->columns([
                    TD::make('id', 'ID') ->sort(),
                    TD::make('name','Name') -> sort(),
                    TD::make('email','Email') -> sort(),
                    TD::make('phone','Phone') -> sort(),
                    TD::make('created_at','Created At') -> sort(),
                ])
        ];
    }
}
