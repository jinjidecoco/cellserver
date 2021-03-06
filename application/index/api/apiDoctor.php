<?php
/**
 * Created by PhpStorm.
 * User: xiaojie
 * Date: 2017/1/17
 * Time: 下午5:32
 */

namespace app\index\api;


use app\index\cell\Cell;

class apiDoctor
{
    public static function apiDoctorNameGet($attest,$doctor_name,$hospital_no) {
        $sendArray = ['id'=>intval(7),'flag'=>intval(0),'data'=>['attest'=>intval($attest),'doctor_name'=>$doctor_name,
            'hospital_no'=>intval($hospital_no)] ];
        $sendData = json_encode($sendArray);
        if($sendData){
            $recvData = Cell::bizSend($sendData);
            if($recvData) {
                $recvArray = json_decode($recvData,true);

                if($recvArray) {
                    return $recvArray;
                }
            }
        }

        return false;
    }

    public static function apiDoctorAdd($attest,$doctor_name,$pwd,$hospital_no,$level,
                                        $department,$logo,$sign_pic,$mobile_no,$role,$learn_level,$info_data) {
        $sendArray = ['id'=>intval(8),'flag'=>intval(0),'data'=>['attest'=>intval($attest),'doctor_name'=>$doctor_name,
            'hospital_no'=>intval($hospital_no),'pwd'=>$pwd, 'level'=>$level,'department'=>$department,'logo'=>$logo,
            'sign_pic'=>$sign_pic,'mobile_no'=>$mobile_no,'role'=>intval($role),'learn_level'=>$learn_level,'info_data'=>$info_data]];
        $sendData = json_encode($sendArray);
        if($sendData){
            $recvData = Cell::bizSend($sendData);
            if($recvData) {
                $recvArray = json_decode($recvData,true);

                if($recvArray) {
                    return $recvArray;
                }
            }
        }

        return false;
    }

    public static function apiDoctorSet($attest,$doctor_no,$doctor_ver,$pwd,$level,
                                        $department,$logo,$sign_pic,$mobile_no,$role,$learn_level,$info_data) {
        $sendArray = ['id'=>intval(9),'flag'=>intval(0),'data'=>['attest'=>intval($attest),'doctor_no'=>$doctor_no,
            'doctor_ver'=>intval($doctor_ver),'pwd'=>$pwd, 'level'=>$level,'department'=>$department,'logo'=>$logo,
            'sign_pic'=>$sign_pic,'mobile_no'=>$mobile_no,'role'=>intval($role),'learn_level'=>$learn_level,'info_data'=>$info_data]];
        $sendData = json_encode($sendArray);
        if($sendData){
            $recvData = Cell::bizSend($sendData);
            if($recvData) {
                $recvArray = json_decode($recvData,true);

                if($recvArray) {
                    return $recvArray;
                }
            }
        }

        return false;
    }

    public static function apiDoctorDrop($attest,$doctor_no) {
        $sendArray = ['id'=>intval(10),'flag'=>intval(0),'data'=>['attest'=>intval($attest),'doctor_no'=>$doctor_no] ];
        $sendData = json_encode($sendArray);
        if($sendData){
            $recvData = Cell::bizSend($sendData);
            if($recvData) {
                $recvArray = json_decode($recvData,true);

                if($recvArray) {
                    return $recvArray;
                }
            }
        }

        return false;
    }

    public static function apiDoctorGet($attest,$hospital_no,$doctor_start,$get_num) {
        $sendArray = ['id'=>intval(11),'flag'=>intval(0),'data'=>['attest'=>intval($attest),'hospital_no'=>intval($hospital_no),
            'doctor_start'=>$doctor_start,'get_num'=>intval($get_num)]];
        $sendData = json_encode($sendArray);
        if($sendData){
            $recvData = Cell::bizSend($sendData);
            if($recvData) {
                $recvArray = json_decode($recvData,true);

                if($recvArray) {
                    return $recvArray;
                }
            }
        }

        return false;
    }

    public static function apiSingleDoctorInfo($attest,$doctor_no) {
        $sendArray = ['id'=>intval(44),'flag'=>intval(0),'data'=>['attest'=>intval($attest),
            'doctor_no'=>$doctor_no]];
        $sendData = json_encode($sendArray);
        if($sendData){
            $recvData = Cell::bizSend($sendData);
            if($recvData) {
                $recvArray = json_decode($recvData,true);

                if($recvArray) {
                    return $recvArray;
                }
            }
        }

        return false;
    }
}