<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Message extends Model implements AuditableContract
{
    use Auditable;

    protected $auditInclude = [
        'id',
        'message',
    ];

    protected $fillable = [
        'message'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
