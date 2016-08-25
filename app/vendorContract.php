<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendorContract extends Model
{
    protected $table = 'vendor_contract';
    protected $fillable = [
    	'business_name',            
		'name',          
		'email',                   
		'phone_number',
		'loss_prevention',         
		'tax_responsibility',      
		'remain_responsibility',   
		'outdoors_understanding',  
		'tables_responsibility', 
    ];
}
