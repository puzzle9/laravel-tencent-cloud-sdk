<?php

namespace Puzzle9\TencentCloudSdk;

use Carbon\Carbon;
use Illuminate\Support\Facades\Facade as LaravelFacade;

class TencentCloudSdk extends LaravelFacade
{
    public static function getFacadeAccessor()
    {
        return TencentCloudManage::class;
    }

    /**
     * 使用 xx 服务
     * @param string        $name   服务名称
     * @param string | null $region 地区
     * @return
     */
    public static function with($name, $region = null)
    {
        return static::getFacadeRoot()->with($name, $region);
    }

    /**
     * live
     * @return \TencentCloud\Live\V20180801\LiveClient
     */
    public static function createLiveDriver()
    {
        return self::with('live');
    }

    /**
     * live help
     * @return Help\LiveHelp
     */
    public static function createLiveHelpDriver()
    {
        return self::with('liveHelp');
    }

    /**
     * cvm
     * @return \TencentCloud\Cvm\V20170312\CvmClient
     */
    public static function createCvmDriver()
    {
        return self::with('cvm');
    }

    /**
     * trtc
     * @url https://cloud.tencent.com/document/product/647/37077
     * @return \TencentCloud\Trtc\V20190722\TrtcClient
     */
    public static function createTrtcDriver()
    {
        return self::with('trtc');
    }

    /**
     * live help
     * @return Help\TrtcHelp
     */
    public static function createTrtcHelpDriver()
    {
        return self::with('trtcHelp');
    }

    /**
     * sms
     * @return \TencentCloud\Sms\V20210111\SmsClient
     */
    public static function createSmsDriver($region = null)
    {
        return self::with('sms', $region);
    }

    /**
     * sms help
     * @return Help\SmsHelp
     */
    public static function createSmsHelpDriver()
    {
        return self::with('smsHelp');
    }
}
