<?php

/**
 * PHP-Fusion v9 Türkçe Dil Dosyası
 * @author Arda Kılıçdağı
 * @link http://arda.pw , http://www.phpfusionturkiye.com
*/

// Member Management Options
$locale['400'] = "Üye Yönetimi";
$locale['401'] = "Üye";
$locale['402'] = "Ekle";
$locale['403'] = "Üye Tipi";
$locale['404'] = "Seçenekler";
$locale['405'] = "Görüntüle";
$locale['406'] = "Düzenle";
$locale['407'] = "Aktif Et";
$locale['408'] = "Banı Kaldır";
$locale['409'] = "Banla";
$locale['410'] = "Sil";
$locale['411'] = "%s Bulunamadı";
$locale['412'] = ". Aranan İlk Harf: ";
$locale['413'] = ". Aranan Kullanıcı Adı: ";
$locale['414'] = "Hepsini Göster";
$locale['415'] = "Üye Ara:";
$locale['416'] = "Ara";
$locale['417'] = "İşlem Seçin";
$locale['418'] = "İptal Et";
$locale['419'] = "Eski durumuna getir";
// Ban/Unban/Delete Member
$locale['420'] = "Siteden Banlandı";
$locale['421'] = "Banı Kaldırıldı";
$locale['422'] = "Üye Silindi";
$locale['423'] = "Bu üyeyi silmek istediğinizden emin misiniz?";
$locale['424'] = "Üye Aktif Edildi";
$locale['425'] = "<h2>Uyarı!</h2><br />
Şu üyeyi silmek üzeresiniz: <strong>%s</strong> !<br />
<u>Bu kullanıcı tarafından</u> siteye eklenmiş aşağıdaki içerikler de kalıcı olarak silinecek:<br />
- Makaleler<br />
- Haberler<br />
- Forum başlıkları. Ayrıca bu başlıklar altına başka kullanıcılar tarafından yazılmış diğer tüm forum mesakları, oylamalar ve ek dosyalar da silinecek.<br />
- Forum mesajlar<br />
- Forum ek dosyaları<br />
- Yorumlar<br />
- Bu kullanıcı tarafından gönderilmiş veya bu kullanıcıya gönderilmiş özel mesajlar<br />
- Anket oylamaları<br />
- Verilen oylamalar<br />
Eğer bu kullanıcı bir spammer değilse bu üyeyi engellemeniz, iptal etmeniz veya anonim hale dönüştürmeniz sitedeki içerikler için daha yararlı olacaktır.<br />
<br />
Bu üyeyi silmek istiyor musunuz?<br />";
$locale['426'] = "Evet";
$locale['427'] = "Hayır";
// Edit Member Details
$locale['430'] = "Kullanıcıyı Düzenle";
$locale['431'] = "Kullanıcı Bilgileri Güncellendi";
$locale['432'] = "Üye Yönetimine Geri Dön";
$locale['433'] = "Site Yönetimine Geri Dön";
$locale['434'] = "Kullanıcı Bilgileri Güncellenemedi:";
// Extra Edit Member Details form options
$locale['440'] = "Değişiklikleri Kaydet";
// Update Profile Errors
$locale['450'] = "Site Sahibi olan ve İlk Admin Olarak tanımlanan yönetici düzenlenemez.";
$locale['451'] = "Bir Üye ismi ve e-mail adresi belirtmelisiniz..";
$locale['452'] = "Üye isminde geçersiz karakter var.";
$locale['453'] = "Bu kullanıcı adı ".(isset($_POST['user_name']) ? $_POST['user_name'] : "")." daha önce alınmış.";
$locale['454'] = "Geçersiz email adresi.";
$locale['455'] = "Bu e-mail adresi ".(isset($_POST['user_email']) ? $_POST['user_email'] : "")." daha önce alınmış.";
$locale['456'] = "Şifreler birbirini tutmuyor.";
$locale['457'] = "Geçersiz şifre, Türkçe Karakter Kullanmayınız.<br>
Şifreniz minimum 6 karakter uzunluğunda olmalıdır.";
$locale['458'] = "<strong>Dikkat:</strong> beklenmeyen bir script hatası oluştu.";
// View Member Profile
$locale['470'] = "Üye Profili: ";
$locale['472'] = "İstatistikler";
$locale['473'] = "Kullanıcı Grupları";
// Add Member Errors
$locale['480'] = "Üye Ekle";
$locale['481'] = "Üye hesabı oluşturuldu.";
$locale['482'] = "Üye hesabı oluşturulamıyor.";
// Suspension Log 
$locale['510s'] = "Şu üyenin geçici banlanma geçmişi: ";
$locale['511s'] = "Geçici banlanma geçmişinde bu üye için bir geçmiş bulunamadı.";
$locale['512s'] = "Şu üyenin önceki geçici banlanmaları: ";
$locale['513'] = "No."; // as in number
$locale['514'] = "Tarih";
$locale['515'] = "Sebep";
$locale['516'] = "Geçici banlanma yönetimi";
$locale['517'] = "Sistem Etkisi"; //system action
$locale['518'] = "Üye Profiline Geri Dön";
$locale['519'] = "Bu üyenin geçici banlanma durumu ";
$locale['520'] = "Ban Kalkma: ";
$locale['521'] = "IP: ";
$locale['522'] = "Henüz eski haline dönüştürülmemiş";
$locale['540'] = "Hata";
$locale['541'] = "Hata: Geçici banlama için bir sebep belirtmelisiniz!";
$locale['542'] = "Hata: Güvenlik banlaması için bir sebep belirtmelisiniz!";
// User Management Admin
$locale['550'] = "Geçici banlanan üye: ";
$locale['551'] = "Müddet (gün):";
$locale['552'] = "Sebep:";
$locale['553'] = "Geçici banlanma";
$locale['554'] = "Geçici banlanma geçmişinde bu üye için bir geçmiş bulunamadı.";
$locale['555'] = "Eğer bu üyenin banlanmasına karar verdiyseniz 'Banla' tuşuna basın";
$locale['556'] = "Şu üyenin geçici banını kaldırın: ";
$locale['557'] = "Geçici banı kaldır";
$locale['558'] = "Şu üyenin banını kaldırın: ";
$locale['559'] = "Banı kaldır ";
$locale['560'] = "Şu üyenin güvenlik banını kaldırın: ";
$locale['561'] = "Güvenlik banını kaldır";
$locale['562'] = "Üyeyi Banla: ";
$locale['563'] = "Güvenlik Banı uygula: ";
$locale['585a'] = "Lütfen banladığınızın ya da banı kaldırmanızın sebebini girin ";
$locale['566'] = "Ban kaldırıldı";
$locale['568'] = "Güvenlik Banı uygulandı";
$locale['569'] = "Güvenlik Banı kaldırıldı";
$locale['572'] = "Üye geçici banlandı";
$locale['573'] = "Geçici Ban kaldırıldı";
$locale['574'] = "Üye inaktif edildi";
$locale['575'] = "Üye yeniden aktif edildi";
$locale['576'] = "Hesap iptal edildi";
$locale['577'] = "Hesap iptali kaldırıldı";
$locale['578'] = "Hesap iptal edildi ve anonim hale dönüştürüldü";
$locale['579'] = "Hesap anonim halden başarı ile kaldırıldı";
$locale['580'] = "Aktif olmayan üyeleri inaktif hale dönüştür";
$locale['581'] = "50 den fazla inaktif üyeniz var ve de deaktifleştirme prosesini <strong>%d sefer</strong> çalıştırmanız gerekmekte.";
$locale['582'] = "Yeniden aktifleştir";
$locale['583'] = "Eski haline dönüştür";
$locale['584'] = "Yeni durumu seçin";
$locale['585'] = "Bu üye ilk olarak güvenlik sebepleri nedeniyle banlanmıştı! Bu üyenin banını kaldırmak istediğinizden emin misiniz?";
$locale['590'] = "Geçici Banla";
$locale['591'] = "Geçici Banı Kaldır";
$locale['592'] = "geçici banladığınız";
$locale['593'] = "geçici banını kaldırdığınız";
$locale['594'] = "Lütfen bu üyeyi neden ";
$locale['595'] = " için bir sebep belirtin: ";
$locale['596'] = "Süre:";
$locale['600'] = "Güvenlik banlaması";
$locale['601'] = "güvenlik banlaması";
$locale['602'] = "Banı kaldır";
$locale['603'] = "banı kaldırılıyor";
$locale['604'] = "Sebep:";
// Deactivation System
$locale['610'] = "<strong>%d üye</strong> <strong>%d gündür</strong> siteye girmedi, ve de bu yüzden inaktif olarak işaretlenmiştir. 
Bunu gerçekleştirerek bu üyelere son olarak <strong>%d gün</strong> tanımış olacaksınız. Yoksa bu üyeler %s<br />
Bu üyeler forum mesajı, yorum, resim gibi içerikler eklemiş olabilirler,
ve de eğer bu üyeler kendilerine verilen süre içerisinde giriş yapmayıp otomatik olarak silinirse girdikleri içerikler de silinecektir.";
$locale['612'] = "üye";
$locale['613'] = "üyeler";
$locale['614'] = "Deaktif Et";
$locale['615'] = "kalıcı olarak silinecek";
$locale['616'] = "Anonim hale dönüştür";
$locale['617'] = "Uyarı:";
$locale['618'] = "Veri kaybını önmelek için dealtivasyon seçeneğini anonim hale dönüştürmeye ayarlamanızı şiddetle tavsiye ediyoruz!";
$locale['619'] = "Bunu buradan gerçekleştirebilirsiniz.";
$locale['620'] = "anonim hale dönüştür";
$locale['621'] = "İnaktif üyelerin otomatik deaktivasyonu.";
?>