<?php

/**
 * PHP-Fusion v9 Türkçe Dil Dosyası
 * @author Arda Kılıçdağı
 * @link http://arda.pw , http://www.phpfusionturkiye.com
*/

$locale['email_create_subject'] = "Sitemizde üyeliğiniz oluşturuldu";
$locale['email_create_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabınız oluşturuldu.\n
Sitemize aşağıdaki kullanıcı bilgileri ile giriş yapabilirsiniz:\n
kullanıcı adı: [USER_NAME]\n
parola: [PASSWORD]\n\n
Saygılarımızla,\n
".$settings['siteusername'];
$locale['email_activate_subject'] = "Sitemizde üyeliğiniz aktif edildi ";
$locale['email_activate_message'] = "Merhaba [USER_NAME],\n
".$settings['sitename']." adlı sitemizde üyeliğiniz aktif edildi.\n
Mevcut kullanıcı adınız ve şifrenizle sitemize yeniden giriş yapabilirsiniz.\n\n
Saygılarımızla,\n
".$settings['siteusername'];
$locale['email_deactivate_subject'] = "Sitemizde hesabınızı yeniden aktifleştirmeniz gerekmekte ";
$locale['email_deactivate_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." adresine ".$settings['deactivation_period']." gündür girmediğinizi fark ettik.
Hesabınızı yeniden aktifleştirmek için aşağıdaki linke tıklayabilirsiniz:\n
".$settings['siteurl']."reactivate.php?user_id=[USER_ID]&code=[CODE]\n
Unutmayın ki sadece üye durumunuz inaktif durumda. Tüm üye bilgileriniz ve sitemize girmiş olduğunuz tüm içerikler halen mevcut ve de aynı durumda bulunmakta.action=[RESPONSE]pass=[PASS]\n\n
Saygılarımızla,\b
".$settings['siteusername'];
$locale['email_ban_subject'] = "Sitemizden banlandınız";
$locale['email_ban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabınız ".$userdata['user_name']." tarafından aşağıdaki sebepten dolayı banlandı:\n
[REASON].\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen ".$settings['siteemail']." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];
$locale['email_secban_subject'] = "Sitemizden banlandınız";
$locale['email_secban_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabınız ".$userdata['user_name']." tarafından sizin ya da sizin hesabınız üzerinden yapılan sitemiz için güvenlik riski teşkil edecek bir davranıştan dolayı banlanmıştır.\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen ".$settings['siteemail']." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];
$locale['email_suspend_subject'] = "Sitemizdeki hesabınız askıya alındı";
$locale['email_suspend_message'] = "Merhaba [USER_NAME],\n
Sitemiz olan ".$settings['sitename']." üzerindeki hesabınız ".$userdata['user_name']." tarafından [DATE] tarihine kadar (site zamanı) aşağıdaki gerekçe ile askıya alınmıştır:\n
[REASON].\n
Eğer bu konu ile ilgili detaylı bilgiye ihtiyaç duyuyorsanız lütfen ".$settings['siteemail']." adresi üzerinden site yöneticileri ile irtibata geçin.\n
".$settings['siteusername'];
?>