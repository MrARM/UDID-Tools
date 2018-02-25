<?php
/**
 * Created by PhpStorm.
 * User: mrarm
 * Date: 2/25/18
 * Time: 3:31 PM
 */

namespace mrarm {


    class UDID
    {
        /**
         * Do a UDID calculation for iPhone 4+
         * @param string int $ecid numeric ECID
         * @param string $wifimac Wifi mac address
         * @param string $btmac Bluetooth Mac address
         * @return string UDID
         */
        public static function CalculateUDID($serial, $ecid, $wifimac, $btmac){
            //Run regex to see if info is valid
            //Regex list
            $mac_address_regex = "/((\d|([A-F])){2}:){5}(\d|([A-F])){2}/";
            //ECID and serial are coming later.

            //For the mac address
            foreach(Array($wifimac,$btmac) as $mac){
                if(!preg_match($mac_address_regex,$mac)){
                    return "Error"; //Exception coming soon
                }
            }

            //ECID
            if(!is_numeric($ecid)){
                return "Error"; //Exception coming soon
            }

            //Do the calculation
            $UDID = sha1(strtoupper($serial).$ecid.$wifimac.$btmac);
            return $UDID;
        }
    }
}