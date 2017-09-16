<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

Class Student extends Model{
    const SEX_UN=10;//未知
    const SEX_MALE=20;//男
    const SEX_FEMALE=30;//女
    protected $table='student_01';
    //允许批量赋值
    protected $fillable=['name','age','sex'];
    public $timestamps=true;
    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($value)
    {
        return $value;
    }

    public function getSex($ind=null){
        $arr=[
            self::SEX_UN=>'未知',
            self::SEX_MALE=>'男',
            self::SEX_FEMALE=>'女'
        ];

        if($ind !==null){
            return array_key_exists($ind,$arr)?$arr[$ind]:$arr[self::SEX_UN];
        }

        return $arr;


    }
}