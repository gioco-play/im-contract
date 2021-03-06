<?php
declare(strict_types=1);
namespace GiocoPlus\IM\Contract;

interface IMServiceInterface {

    /**
     * 遊戲啟動
     * @param string $op_code
     * @param string $account
     * @param string $game_code
     * @param string $language
     * @param string $vendor_code
     * @return mixed
     */
    function gameLaunch(string $op_code, string $account, string $game_code, string $language, string $vendor_code);

    /**
     * 遊戲詳情
     * @param string $op_code
     * @param string $bet_id
     * @param string $vendor_code
     * @return mixed
     */
    function gameDetail(string $op_code, string $bet_id, string $vendor_code);

    /**
     * 抓取遊戲紀錄
     * @param string $op_code
     * @param integer $past_minutes
     * @param string $cache_key
     * @param string $vendor_code
     * @return mixed
     */
    function betLogGrabber(string $op_code, int $past_minutes, string $cache_key, string $vendor_code);

    /**
     * 全營商 抓取遊戲紀錄
     * @param integer $past_minutes
     * @param string $vendor_code
     * @return mixed
     */
    function betLogGrabberAll(int $past_minutes, string $vendor_code);

    /**
     * 遊戲上分
     * @param string $op_code
     * @param string $account
     * @param string $vendor_code
     * @return mixed
     */
    function gameTransferIn(string $op_code, string $account, string $vendor_code);

    /**
     * 遊戲下分
     * @param string $op_code
     * @param string $account
     * @param float $amount
     * @param string $vendor_code
     * @return mixed
     */
    function gameTransferOut(string $op_code, string $account, float $amount, string $vendor_code);

    /**
     * 取得錢包餘額
     * @param string $op_code
     * @param string $account
     * @param string $vendor_code
     * @return mixed
     */
    function getBalance(string $op_code, string $account, string $vendor_code);

    /**
     * 上/下分失敗 訂單檢核
     * @param string $op_code
     * @param string $order_no
     * @param string $vendor_code
     * @return mixed
     */
    function orderFailCheck(string $op_code, string $order_no, string $vendor_code);
}
