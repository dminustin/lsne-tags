<?php

namespace Dminustin\LSNE\TagsPackage\Models;

use Dminustin\LSNE\TagsPackage\Models\Base\TagsToObject as BaseTagsToObject;

class TagsToObject extends BaseTagsToObject
{
	protected $fillable = [
		'tag_id',
		'object_id',
		'object_class',
		'tag_type'
	];
}
