<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

/**
 * App\Models\Contact
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Block> $blocks
 * @property-read int|null $blocks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\File> $files
 * @property-read int|null $files_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Media> $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Contact withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Contact withoutTrashed()
 * @mixin \Eloquent
 */
class Contact extends Model 
{
    use HasBlocks, HasMedias, HasFiles;

    protected $fillable = [
        'published',
        'title',
        'description',
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
