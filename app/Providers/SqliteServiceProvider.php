<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

final class SqliteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (DB::getDriverName() === 'sqlite') {
            try {
                DB::unprepared(
                    <<<'SQL'
                    PRAGMA busy_timeout = 5000;
                    PRAGMA cache_size = -20000;
                    PRAGMA foreign_keys = ON;
                    PRAGMA incremental_vacuum;
                    PRAGMA mmap_size = 2147483648;
                    PRAGMA temp_store = MEMORY;
                    PRAGMA synchronous = NORMAL;
                SQL,
                );
            } catch (QueryException $e) {
                throw_unless(str_contains($e->getMessage(), 'does not exist.'), $e);
            }
        }
    }
}
