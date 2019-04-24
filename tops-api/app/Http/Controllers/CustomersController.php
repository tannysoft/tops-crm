<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Endroid\QrCode\QrCode;

class CustomersController extends Controller {

    const MODEL = "App\Customers";

    use RESTActions;

    function getCustomer($campaignId, $id) {

        $customers = DB::table('customers')
                        ->select('id', 't1c_card_no as theOneCardNo', 'CAMPAIGN_ID as campaignId', 'customers.SBL_MEMBER_ID as sblMemberId', 'FIRST_TH_NAME as firstnameTh', 'LAST_TH_NAME as lastnameTh', 'FIRST_EN_NAME as firstnameEn', 'FIRST_EN_NAME as firstnameEn', 'LAST_EN_NAME as lastnameEn', 'LANGUAGE as language', 'CC_SCB as creditsScb', 'CC_Central as creditsCentral', 'CC_BAY as creditsBay', 'CC_KTC as creditsKtc', 'Condition_ID as conditionId', 'Condition_ID2 as conditionTitle', 'GROUP as group', 'MIN_PURCHASE as minPurchase', 'url_id as shortlink')
                        ->leftJoin('customer_t1', 'customers.SBL_MEMBER_ID', '=', 'customer_t1.SBL_MEMBER_ID')
                        ->where('customers.CAMPAIGN_ID' , '=', $campaignId)
                        ->where('customers.url_id' , '=', $id)
                        ->get();

        if(!count($customers)){
            return $this->respond(Response::HTTP_NOT_FOUND);
        }

        $data['data'] = $this->replaceFormat($customers[0]);
        //$data['data']->theOneCardNo = $this->getTheOneCard($customers[0]->sblMemberId);
        $data['data']->barcodes = $this->getCoupon($customers[0]->id, $customers[0]->sblMemberId, $customers[0]->campaignId);

        return $this->respond(Response::HTTP_OK, $data);
    }

    function updateBarcode($campaignId, $id, $barcode) {

    }

    function generateQrcode() {
        $qr_code = new QrCode();
        $image = $qr_code->setText("José Camilo Fernandes Coelho")
                        ->setSize(300)
                        ->setPadding(10)
                        ->setErrorCorrection('high')
                        ->setImageType('png');

        $content = $image->get("png");

        return response($content)
            ->header('Content-Type','image/png')
            ->header('Pragma','public')
            ->header('Content-Disposition','inline; filename="qrcodeimg.png"')
            ->header('Cache-Control','max-age=60, must-revalidate');
    }

}
