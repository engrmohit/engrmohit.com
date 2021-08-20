<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public static function getTableName()
    {
        return (new static)->getTable();
    }
}
