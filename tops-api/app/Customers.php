<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model {

    protected $table = 'customers';
    protected $primaryKey = 'url_id';
    protected $hidden = [];

    //protected $fillable = ["CAMPAIGN_ID", "SBL_MEMBER_ID", "FIRST_TH_NAME", "LAST_TH_NAME", "FIRST_EN_NAME", "LAST_EN_NAME", "LANGUAGE", "CC_SCB", "CC_Central", "CC_BAY", "CC_KTC", "Condition_ID", "Condition_ID2", "GROUP", "MIN_PURCHASE", "url_id", "tops_api_id"];
    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        "CAMPAIGN_ID" => "numeric",
        "CC_SCB" => "numeric",
        "CC_Central" => "numeric",
        "CC_BAY" => "numeric",
        "CC_KTC" => "numeric",
        "Condition_ID" => "numeric",
        "tops_api_id" => "required|numeric",
    ];

    public $timestamps = false;

    public function topsApi()
    {
        return $this->belongsTo("App\TopsApi");
    }


}
