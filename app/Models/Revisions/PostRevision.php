<?php

namespace App\Models\Revisions;

use A17\Twill\Models\Revision;

/**
 * App\Models\Revisions\PostRevision
 *
 * @property int $id
 * @property int $post_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $payload
 * @property-read mixed $by_user
 * @property-read \A17\Twill\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereUserId($value)
 * @mixin \Eloquent
 */
class PostRevision extends Revision
{
    protected $table = "post_revisions";
}
