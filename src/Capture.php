<?php
/**
 * Created by PhpStorm.
 * User: mrarm
 * Date: 3/3/18
 * Time: 1:05 PM
 */

namespace mrarm\UDID;


class Capture
{
private static String xmldata = "
    <?xml version=\"1.0\" encoding=\"UTF-8\"?>
    <!DOCTYPE plist PUBLIC \"-/\/Apple/\/DTD PLIST 1.0/\/EN\" \"http://www.apple.com/DTDs/PropertyList-1.0.dtd\">
    <plist version=\"1.0\">
        <dict>
            <key>PayloadContent</key>
            <dict>
                <key>URL</key>
                    <string>{{URL}}</string>
                <key>DeviceAttributes</key>
                <array>
                    <string>UDID</string>
                    <string>DEVICE_NAME</string>
                    <string>VERSION</string>
                    <string>PRODUCT</string>
                    <string>MAC_ADDRESS_EN0</string>
                    <string>IMEI</string>
                    <string>ICCID</string>
                </array>
            </dict>
            <key>PayloadOrganization</key>
            <string>{{ORG}}</string>
            <key>PayloadDisplayName</key>
            <string>{{TITLE}}</string>
            <key>PayloadVersion</key>
            <integer>1</integer>
            <key>PayloadUUID</key>
            <string>BDD0F593-5B98-47FF-A0A4-4B98E30CE451</string>
            <key>PayloadIdentifier</key>
            <string>{{IDENTIFIER}}</string>
            <key>PayloadDescription</key>
            <string>{{DESCRIPTION}}</string>
            <key>PayloadType</key>
            <string>Profile Service</string>
        </dict>
    </plist>
    ";


    /**
     * Generate and serve a mobileconfig payload to get device information. Note that you shouldn't serve content and the script will die.
     * @param string $url URL of the Reciever
     * @param string $organization (optional) Company name that shows up
     * @param string $title (optional) Title of the profile
     * @param string $description (optional) Description of the payload. Ex. Get your UDID.
     * @param string $identifier (optional) ID for the payload, you shouldn't need to set this by default.
     */
    public static function serve_payload($url, $organization = "UDID-Tools", $title = "UDID Capture", $description = "Get the UDID of the iDevice and return it to the server. Profile is removed after UDID is gotten.", $identifier = "com.mrarm.UDIDToos.capture")
    {

    }
}