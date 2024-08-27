<?php

namespace App\Models\System;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Traits\DataTablesTrait;
use OwenIt\Auditing\Auditable as AuditableTrait;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Menu extends Model implements AuditableContract
{
    use HasFactory, DataTablesTrait, AuditableTrait;

    protected $fillable = [
        'name',
        'icon',
        'route',
        'parent_id',
        'order',
    ];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public static function Datatable($request)
    {
        $selectColumns = ['id', 'name', 'icon', 'route', 'parent_id', 'order'];
        $searchColumns = ['name', 'icon', 'route', 'parent_id', 'order'];

        $query = self::query();
        $query->select($selectColumns);

        return self::getAllRows($request, $query, $selectColumns, $searchColumns);
    }
}
