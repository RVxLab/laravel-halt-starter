<?php

declare(strict_types=1);

namespace App\Providers;

use App\Macros\HtmxRequestMacros;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

final class HtmxServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->bootRequestMacros();
    }

    private function bootRequestMacros(): void
    {
        Request::macro('isHtmxRequest', fn(): bool => HtmxRequestMacros::isHtmxRequest($this));
        Request::macro('isHxRequest', fn(): bool => HtmxRequestMacros::isHtmxRequest($this));
        Request::macro('isHxBoosted', fn(): bool => HtmxRequestMacros::isBoosted($this));
        Request::macro('hxCurrentUrl', fn(): ?string => HtmxRequestMacros::currentUrl($this));
        Request::macro('isHxHistoryRestoreRequest', fn(): bool => HtmxRequestMacros::isHistoryRestoreRequest($this));
        Request::macro('hxPrompt', fn(): ?string => HtmxRequestMacros::prompt($this));
        Request::macro('hxTarget', fn(): ?string => HtmxRequestMacros::target($this));
        Request::macro('hxTrigger', fn(): ?string => HtmxRequestMacros::trigger($this));
        Request::macro('hxTriggerName', fn(): ?string => HtmxRequestMacros::triggerName($this));
    }
}
