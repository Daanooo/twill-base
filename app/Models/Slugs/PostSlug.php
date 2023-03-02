<?php

namespace App\Models\Slugs;

use A17\Twill\Models\Model;

/**
 * App\Models\Slugs\PostSlug
 *
 * @property int $id
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \A17\Twill\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug withoutTrashed()
 * @mixin \Eloquent
 */
class PostSlug extends Model
{
    protected $table = "post_slugs";
}
