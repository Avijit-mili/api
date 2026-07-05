<?php
header("Content-Type: application/json; charset=utf-8");

// ১. অ্যাপ থেকে পাঠানো কী (Key) রিসিভ করা
$inputKey = $_GET['key'] ?? '';

// ২. আপনার নিজের তৈরি করা সিক্রেট Key (এটি আপনি অ্যাপে বা লিংকে ব্যবহার করবেন)
$mySecretKey = "venonmengine"; 

// ৩. যাচাই করার লজিক
if ($inputKey === $mySecretKey) {
    
    $responseData = [
        "success" => true,
        "message" => "تم التحقق من الجهاز، الكود لا يزال صالحاً",
        "seller_username" => "super_venom_admin",
        "game_name" => "8bp",
        "total_hours" => 24,
        "max_devices" => 1000,
        "time_left_seconds" => 79508,
        "is_expired" => false,
        "expiry" => "2026-07-06 13:18:06",
        "activated_at" => "2026-07-05 13:18:06",
        "time_left_hours" => 22.1,
        "used_devices" => 17,
        "devices_list" => [
            ["id" => "e1cc9eeb7eaa7c7c69d3a44c37d4a5e9f466bf7399504aea8f0096493f9357c8", "name" => "Android"],
            ["id" => "6fb4cbbb70835e91e835c72cd0a31588e5acb4a12c75e770527c9f40d67de6be", "name" => "Android"],
            ["id" => "046816aea0732d589a6beb4bb61d5701034ce6cfb925718cdb88f86c38af3786", "name" => "Android"],
            ["id" => "85fa47849d16686395c347fccb078954170b10f30cc1b036866317f8b2486e6a", "name" => "Android"],
            ["id" => "cc64aff8f24b751afdccb1ac9d4f20dd76376314c8bb49fed2edba4a3e14bcd2", "name" => "Android"],
            ["id" => "b0eb387cd9f80c675cf85585eae326f27c310d28ca38aae85baf5e9e04556398", "name" => "Android"],
            ["id" => "6278df38ff7206692502e420aba82ae5eb1f929a6d846294f8cf93e37517aa78", "name" => "Android"],
            ["id" => "d52f73869c1f53165bebd6e3018b7e1cbf95d3f3ff2793d0216b632cbdfdd613", "name" => "Android"],
            ["id" => "49edc867bb140d1a39759dc363ab7cc2b23ac26f3a70587c24d8486c0e0e8484", "name" => "Android"],
            ["id" => "01abd24410edb41230e2f9943982434a08aa19f1f16d747f9613adbb9a8718e2", "name" => "Android"],
            ["id" => "c3dab2d54ef0bd07f52313a247f94ec69e33dff22f8e376b602ca84325a09197", "name" => "Android"],
            ["id" => "73afa2811b238fdd2faf1db13009cc11a5e184cad677f2c239fc189b37474845", "name" => "Android"],
            ["id" => "0dc7614ed956996c75c34a2bca95da0e5a366672c6a316d2892c43f66169dcce", "name" => "Android"],
            ["id" => "e4b767e142b4e6e073f4763fca73d378840118b041d1b4bb7adf19a0c977d2df", "name" => "Android"],
            ["id" => "c177a608b6e541adb048e71456b2394004aff05827d5208d3c11d69f81401dd7", "name" => "Android"],
            ["id" => "510933e1c504dc985611a9f65f61267f95c6f52ae2c67e04a3ca9aa642fbb94b", "name" => "Android"],
            ["id" => "36fbb0e5a44601604e63729cda35a5c45a4b7f0a61f08d440abbdb767804bcec", "name" => "Android"]
        ]
    ];
    
    echo json_encode($responseData, JSON_UNESCAPED_UNICODE);

} else {
    
    // ভুল বা ফাঁকা কী দিলে এই এরর দেখাবে
    echo json_encode([
        "success" => false,
        "message" => "Invalid or Expired Key!"
    ]);
    
}
?>
