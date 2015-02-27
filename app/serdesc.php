<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class serdesc extends Model {

	protected $table = 'series_t_description';
  protected $primaryKey = 'stdid';
  public $timestamps = false;

}
