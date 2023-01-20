<?php

/**
 * Created by Reliese Model.
 */

namespace Dminustin\LSNE\TagsPackage\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TagsToObject
 *
 * @property string $id
 * @property string $tag_id
 * @property string $object_id
 * @property string $object_class
 * @property string $tag_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class TagsToObject extends Model
{
    protected $table = 'tags_to_objects';
    public $incrementing = false;
}
