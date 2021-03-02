<?php
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent;
  
class Event extends App
{
    use HasFactory;
  
    protected $fillable = [
        'title', 'start', 'end'
    ];
}