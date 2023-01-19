<?php

namespace Dminustin\LSNE\TagsPackage\Models;

use Dminustin\LSNE\TagsPackage\Models\Base\Tag as BaseTag;

class Tag extends BaseTag
{
	protected $fillable = [
		'title',
		'name_hash',
		'locked',
		'usage_count'
	];
}
