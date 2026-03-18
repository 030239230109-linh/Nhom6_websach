<?php

class Book extends Model{
use HasFactory;
protected $table = "sach";
protected $primaryKey = "id";
public $timestamps = false;
}
