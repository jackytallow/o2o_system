<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2019/3/19
 * Time: 16:14
 */

namespace app\common\model;


use think\Model;

class BisAccount extends Model
{

    protected $autoWriteTimestamp = true;
    public function add($data){
        $data['status'] = 0;
       // $data['create_time'] = time();
        $this->save($data);
        return $this->id;
    }


}