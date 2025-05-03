<?php

namespace App\Filament\Server\Extensions;

use App\Models\Server;
use Filament\Facades\Filament;
use Filament\Pages\Page;


class Example extends Page
{
    protected static ?string $navigationLabel = 'Example';

    protected static ?string $title = 'Example';

    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    protected static ?int $navigationSort = 10;

    protected static string $view = 'filament.extensions.example-page';

    public function getTitle(): string
    {
        return 'Example Override';
    }

    public static function canAccess(): bool
    {
        /** @var Server $server */
        $server = Filament::getTenant();

        return parent::canAccess()
            && auth()->user()->can('example.read', $server)
            && $server->isInstalled()
            && !$server->isSuspended();

    }

    public string $string = "";

    public function mount(): void
    {
        abort_unless(auth()->user()->can('example.read', Filament::getTenant()), 403);
        /** @var Server $server */
        $server = Filament::getTenant();
        abort_if(!$server->isInstalled() OR $server->isSuspended(), 403);

        $this->string = "test string";

    }
}
