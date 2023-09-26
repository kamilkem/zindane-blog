<?php

/**
 * This file is part of the zidane-blog package.
 *
 * (c) Kamil Kozaczyński <kozaczynski.kamil@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Repository;

use App\Models\Entry;
use Illuminate\Contracts\Pagination\Paginator;

class EntryRepository implements EntryRepositoryInterface
{
    public function getPaginatedEntries(int $itemsPerPage = 10): Paginator
    {
        return Entry::whereNotNull('published_at')->orderBy('published_at', 'desc')->paginate($itemsPerPage);
    }
}
