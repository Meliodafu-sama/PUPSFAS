<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    protected $table="announcement_table";
    protected $primaryKey = "announcement_id";
    public $timeStamps = false;
}
