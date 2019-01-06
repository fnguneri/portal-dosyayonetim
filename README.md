# portal-dosyayonetim
Dosyayonetim modülümu portalınıza eklemek için ;

=>Portal içerisindeki composer.json dosyasında bulunan repositories bölümüne bu linki  ekleyin :

![ekran alintisi7](https://user-images.githubusercontent.com/45860464/50736786-b2147400-11d2-11e9-85eb-3f741d0b2f70.PNG)


=> Portal klasörü içerisinde bulunan backend, frontend ve api dosyalarının sahip olduğu main.php dosyalarındaki modüls bölümüne kendi modülünüzü eklemeniz gerekmektedir.

=> Composer.json a eklediğimiz repoyu sistemimize eklemek için vagrant ssh yaptıktan sonra cd /var/www/portal dizininde composer update veya composer require kouosl/portal-odev:dev-master komutunu çalıştırınız.

=> Gereken aşamalar;
