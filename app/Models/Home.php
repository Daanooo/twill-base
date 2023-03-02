<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

/**
 * App\Models\Home
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Block> $blocks
 * @property-read int|null $blocks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Media> $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Home withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Home withoutTrashed()
 * @mixin \Eloquent
 */
class Home extends Model
{
    use HasBlocks, HasMedias;

    public const AVAILABLE_BLOCKS = [
        'test'
    ];

    protected $fillable = [
        'published',
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];
}
