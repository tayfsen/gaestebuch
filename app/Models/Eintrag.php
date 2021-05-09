<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Eintrag extends Model
{
public $table = "Eintrag";
public $primaryKey = "idEintrag";
protected $fillable = ["Vorname", "Nachname", "E-Mail", "Text"];

}
