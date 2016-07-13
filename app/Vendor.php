<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use SoftDeletes;

    protected $fillable = ['full_name', 'biz_name', 'email', 'website_1', 'website_2', 'facebook', 'Twitter', 'instagram', 'prod_desc', 'paypal_email', 'booth_pref','notes'];


}
