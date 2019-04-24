<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

trait RESTActions {

/*
    public function all()
    {
        $m = self::MODEL;
        return $this->respond(Response::HTTP_OK, $m::all());
    }
*/
    public function get($id)
    {
        $m = self::MODEL;
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        return $this->respond(Response::HTTP_OK, $model);
    }
/*
    public function add(Request $request)
    {
        $m = self::MODEL;
        $this->validate($request, $m::$rules);
        return $this->respond(Response::HTTP_CREATED, $m::create($request->all()));
    }

    public function put(Request $request, $id)
    {
        $m = self::MODEL;
        $this->validate($request, $m::$rules);
        $model = $m::find($id);
        if(is_null($model)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $model->update($request->all());
        return $this->respond(Response::HTTP_OK, $model);
    }

    public function remove($id)
    {
        $m = self::MODEL;
        if(is_null($m::find($id))){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }
        $m::destroy($id);
        return $this->respond(Response::HTTP_NO_CONTENT);
    }
*/
    protected function respond($status, $data = [])
    {
        return response()->json($data, $status);
    }

    protected function getCoupon($customerId, $sblMemberId, $campaignId)
    {
        $memberCoupons = DB::table('u2cv')
                        ->where('u2cv.campaign_id' , '=', $campaignId)
                        ->where('u2cv.SBL_MEMBER_ID' , '=', $sblMemberId)
                        ->get();

        if(!count($memberCoupons)){
            return null;
        } else {
            $cvSet = explode(',', str_replace("\n", '', str_replace("\r", '', $memberCoupons[0]->CV_SET)));
            $today = date("Y-m-d H:i:s");

            foreach ($cvSet as $cvVal) {

                $coupons = DB::table('cv_master')
                        ->select('barcode', 'type', 'min_purchase', 'discount', 'start', 'end')
                        ->where('cv_master.cam_id' , '=', $memberCoupons[0]->campaign_id)
                        ->where('cv_master.barcode' , '=', $cvVal)
                        //->where('cv_master.start' , '<=', $today)
                        //->where('cv_master.end' , '>=', $today)
                        ->get();

                foreach ($coupons as $key => $value) {
                    $type = $value->type;
                    $value->minPurchase = trim($value->min_purchase);
                    $value->discount = trim($value->discount);

                    $couponUsed = DB::table('coupon_useds')
                        ->select('id')
                        ->where('coupon_useds.customer_id' , '=', $customerId)
                        ->where('coupon_useds.campaign_id' , '=', $memberCoupons[0]->campaign_id)
                        ->where('coupon_useds.barcode' , '=', $cvVal)
                        ->get();

                    if(count($couponUsed)) {
                        $value->used = true;
                    } else {
                        $value->used = false;
                    }
                    
                    unset($value->type);
                    unset($value->min_purchase);

                    $couponsItem[strtolower($type)][] = $value;
                }


            }
        }

        if(isset($couponsItem)){
            return $couponsItem;
        } else {
            return null;
        }
        
    }

    protected function replaceFormat($data)
    {
        $data->language = strtolower($data->language);

        if($data->language == 'th') {
            $data->firstname = $data->firstnameTh;
            $data->lastname = $data->lastnameTh;
        } else {
            $data->firstname = $data->firstnameEn;
            $data->lastname = $data->lastnameEn;
        }

        $data->condition['id'] = $data->conditionId;
        $data->condition['title'] = $data->conditionTitle;
        $data->credits['scb'] = $data->creditsScb;
        $data->credits['central'] = $data->creditsCentral;
        $data->credits['bay'] = $data->creditsBay;
        $data->credits['ktc'] = $data->creditsKtc;

        unset($data->firstnameTh);
        unset($data->lastnameTh);
        unset($data->firstnameEn);
        unset($data->lastnameEn);
        unset($data->conditionId);
        unset($data->conditionTitle);
        unset($data->creditsScb);
        unset($data->creditsCentral);
        unset($data->creditsBay);
        unset($data->creditsKtc);

        return $data;
    }

}
