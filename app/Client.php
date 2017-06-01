<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //указываем модели с какой таблицей работать
    protected $table = 'clients';
}
