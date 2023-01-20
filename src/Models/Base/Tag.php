<?php

/**
 * Created by Reliese Model.
 */

namespace Dminustin\LSNE\TagsPackage\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @property string $id
 * @property string $title
 * @property string $name_hash
 * @property bool $locked
 * @property int $usage_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models\Base
 */
class Tag extends Model
{
    protected $table = 'tags';
    public $incrementing = false;

    protected $casts = [
        'locked' => 'bool',
        'usage_count' => 'int'
    ];
}
