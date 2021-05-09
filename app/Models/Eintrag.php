<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Eintrag extends Model
{
public $table = "eintrag";
public $primaryKey = "idEintrag";
protected $fillable = ["Vorname", "Nachname", "EMail", "Text"];

}
