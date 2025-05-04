<?php

namespace App\Filament\Server\Extensions;

use App\Models\Server;
use Extensions\helper\extensionHelper;
use Filament\Facades\Filament;
use Filament\Pages\Page;
use Filament\Actions\Action;


class Example extends Page
{
    protected static ?string $navigationLabel = 'Example';

    protected static ?string $title = 'Example';

    protected static ?string $navigationIcon = 'tabler-ruler';

    protected static ?int $navigationSort = 10;

    protected static string $view = 'filament.extensions.example-page';

    public static function canAccess(): bool
    {
        /** @var Server $server */
        $server = Filament::getTenant();

        return parent::canAccess()
            && auth()->user()->can('example.read', $server)
            && $server->isInstalled()
            && !$server->isSuspended()
            && extensionHelper::checkExtensionEgg("example-extension", $server->egg['id']);

    }

    public function getTitle(): string
    {
        return 'Custom Title';
    }

    public function getHeaderActions(): array
    {
        return [
            Action::make('Filament Docs')
                ->url('https://filamentphp.com/docs')
                ->openUrlInNewTab()
                ->icon('heroicon-m-book-open')
                ->color('info'),
            Action::make('What types can I use in my blade file')
                ->url('https://filamentphp.com/docs/3.x/support/blade-components/overview')
                ->openUrlInNewTab()
                ->icon('heroicon-m-book-open'),
        ];
    }

    public string $string = "";
    public int $amount = 0;

    public function mount(): void
    {
        $this->string = "String set dynamically";
    }

    public function exampleCalculate(int $amount): void
    {
        $this->amount = $this->amount + $amount;
    }
}
