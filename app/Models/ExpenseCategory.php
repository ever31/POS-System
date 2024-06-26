<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{

    protected $fillable = [
        'workspace_id', 'user_id', 'description', 'name', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected $casts = [
        'workspace_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function expense()
    {
        return $this->belongsTo('App\Models\Expense');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function workspace()
    {
        return $this->belongsTo('App\Models\Workspace');
    }
}
