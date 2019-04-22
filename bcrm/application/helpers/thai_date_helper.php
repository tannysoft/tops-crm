<?php
function to_thai_date_format($date = NULL) {
	if (empty($date)) return NULL; 
	$strYear = date("Y",strtotime($date))+543;
	$strMonth= date("n",strtotime($date));
	$strDay= date("j",strtotime($date));
	$strHour= date("H",strtotime($date));
	$strMinute= date("i",strtotime($date));
	$strSeconds= date("s",strtotime($date));
	$strMonthCut = array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	$strMonthThai=$strMonthCut[$strMonth];
	//return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	return "$strDay $strMonthThai $strYear";
}

function to_thai_between_date_format($start = NULL, $end = NULL) {
	if (empty($start) || empty($end)) return NULL;
	//
	$strMonthCut = array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	// start
	$startYear = date("Y",strtotime($start))+543;
	$startMonth= date("n",strtotime($start));
	$startDay= date("j",strtotime($start));
	$startHour= date("H",strtotime($start));
	$startMinute= date("i",strtotime($start));
	$startSeconds= date("s",strtotime($start));
	$startMonthThai = $strMonthCut[$startMonth];
	// end
	$endYear = date("Y",strtotime($end))+543;
	$endMonth= date("n",strtotime($end));
	$endDay= date("j",strtotime($end));
	$endHour= date("H",strtotime($end));
	$endMinute= date("i",strtotime($end));
	$endSeconds= date("s",strtotime($end));
	$endMonthThai = $strMonthCut[$endMonth];
	//
	$startYear = substr($startYear, 2);
	//
	return "$startDay $startMonthThai - $endDay $endMonthThai $startYear";
}