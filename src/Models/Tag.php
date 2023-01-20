<?php

namespace Dminustin\LSNE\TagsPackage\Models;

use Dminustin\LSNE\CorePackage\Traits\HasUUIDTrait;
use Dminustin\LSNE\TagsPackage\Models\Base\Tag as BaseTag;

class Tag extends BaseTag
{
    use HasUUIDTrait;

    protected $fillable = [
        'title',
        'name_hash',
        'locked',
        'usage_count'
    ];

    public static function getOrCreate($tag): Tag
    {
        $name_hash = md5(mb_convert_case($tag, MB_CASE_LOWER));
        $tag = Tag::query()->where('name_hash', '=', $name_hash)->first();
        if (!$tag) {
            $tag = new Tag([
                'title' => $tag,
                'name_hash' => $name_hash,
                'usage_count' => 0,
                'locked' => false
            ]);
            $tag->save();
        }
        return $tag;
    }
}
