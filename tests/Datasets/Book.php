<?php

declare(strict_types=1);

namespace Tests\Datasets;

use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Attributes\Relations\BelongsTo;
use WendellAdriel\Lift\Attributes\Relations\HasMany;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Lift;

#[BelongsTo(BookCase::class)]
#[HasMany(Price::class, 'custom_id', 'id')]
class Book extends Model
{
    use Lift;

    #[PrimaryKey]
    public int $id;

    #[Rules(['required', 'string'], ['required' => 'The book name cannot be empty'])]
    public string $name;

    protected $fillable = [
        'name',
    ];
}
