<?php

declare(strict_types=1);

namespace App\Macros;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

final readonly class HtmxRequestMacros
{
    public static function isHtmxRequest(Request $request): bool
    {
        return self::bool($request, 'HX-Request');
    }

    public static function isBoosted(Request $request): bool
    {
        return self::bool($request, 'HX-Boosted');
    }

    public static function currentUrl(Request $request): ?string
    {
        return self::firstString($request, 'HX-Current-Url');
    }

    public static function isHistoryRestoreRequest(Request $request): bool
    {
        return self::bool($request, 'HX-History-Restore-Request');
    }

    public static function prompt(Request $request): ?string
    {
        return self::firstString($request, 'HX-Prompt');
    }

    public static function target(Request $request): ?string
    {
        return self::firstString($request, 'HX-Target');
    }

    public static function trigger(Request $request): ?string
    {
        return self::firstString($request, 'HX-Trigger');
    }

    public static function triggerName(Request $request): ?string
    {
        return self::firstString($request, 'HX-Trigger-Name');
    }

    private static function bool(Request $request, string $header): bool
    {
        return filter_var($request->header($header), FILTER_VALIDATE_BOOLEAN);
    }

    private static function firstString(Request $request, string $header): ?string
    {
        /** @var list<string> $headers */
        $headers = Arr::wrap($request->header($header));

        return Arr::first($headers);
    }
}
