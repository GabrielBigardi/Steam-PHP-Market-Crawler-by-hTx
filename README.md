# Steam PHP Market Crawler by hTx
  
# Tutorial:
1 - Go to https://www.pushbullet.com/ and create a free account.  
2 - Set up your phone by following the documentation.  
3 - Go to https://www.pushbullet.com/#settings/account and click on "Create Access Token", that's your API Key.  
4 - Download PushBullet apk on your phone and sign in, test sending some notification to your phone using the app.  
5 - Download the "job.php".  
6 - Edit $apikey and $deviceid on "job.php" to your settings on PushBullet.  
7 - Edit the item name on the "job.php", in the top variable: "$itemname" (Must be URL Encoded, just go to: https://steamcommunity.com/market/ and search for the item and copy the item name in URL [NOT THE FULL URL !!!]) E.G: "Prisma%20Case", "AK-47%20%7C%20Redline%20%28Field-Tested%29"  
8 - Run it on browser on some http server or do a cron job for automating the process using the parameters "php job.php".  
  
# Credits:
Gabriel Bigardi (programmer)  
PHP Brasil (Facebook community that helped me)
