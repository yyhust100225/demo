<?php

namespace App\Http\Controllers\Code;

use App\Extensions\Notices\Notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CodeController extends BaseController
{
    protected $notify;

    public function __construct(Notify $notify)
    {
        $this->notify = $notify;
        parent::__construct();
    }

    public function index() {
        $url = 'http://www.sina.com.cn/abc/de/fg.php?id=1';

        $url_info = parse_url($url);

        $file = basename($url_info['path']);

        $ex = explode('.', $file);

        var_dump($ex);
    }

    // 冒泡排序
    private function bsort($arr) {
        $num = count($arr);
        for($i = 0; $i < $num; $num--) {
            for($j = 0; $j < $num - 1; $j++) {
                if($arr[$j] > $arr[$j+1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $temp;
                }
            }
        }
        return $arr;
    }

    // 快速排序
    private function qsort($arr) {
        $count = count($arr);
        if($count <= 1)
            return $arr;
        else {
            $left = [];
            $right = [];
            $middle_num = $arr[0];
            for($i = 1; $i < $count; $i++) {
                if($arr[$i] < $middle_num) array_push($left, $arr[$i]);
                else array_push($right, $arr[$i]);
            }
            return array_merge($this->qsort($left), [$arr[0]], $this->qsort($right));
        }
    }

}
