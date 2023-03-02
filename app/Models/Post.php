<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Repositories\PostRepository;

/**
 * App\Models\Post
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Block> $blocks
 * @property-read int|null $blocks_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\File> $files
 * @property-read int|null $files_count
 * @property-read string $slug
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Media> $medias
 * @property-read int|null $medias_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Revisions\PostRevision> $revisions
 * @property-read int|null $revisions_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Slugs\PostSlug> $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Post forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Post forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Post forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Post mine()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Post withoutTrashed()
 * @mixin \Eloquent
 */
class Post extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasFiles, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $slugAttributes = [
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
