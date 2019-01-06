# portal-dosyayonetimi
# portal-dosyayonetim



Dosyayonetim modülümu portalınıza eklemek için ;

=>Portal içerisindeki composer.json dosyasında bulunan repositories bölümüne bu linki  ekleyin :

![ekran alintisi7](https://user-images.githubusercontent.com/45860464/50736786-b2147400-11d2-11e9-85eb-3f741d0b2f70.PNG)


=> Portal klasörü içerisinde bulunan backend, frontend ve api dosyalarının sahip olduğu main.php dosyalarındaki modüls bölümüne kendi modülünüzü eklemeniz gerekmektedir.



=> Gereken aşamalar;

![ekran alintisi9](https://user-images.githubusercontent.com/45860464/50736829-69a98600-11d3-11e9-9018-52e478ebb292.PNG)


 => Veritabanı işlemlerim için ise,elle oluşturmak yerine Migration Kullandım. Bu yüzden Migration dosyamın yüklenmesi gerekmektedir.Gereken komut düzeni:
 
 ![ekran alintisi10](https://user-images.githubusercontent.com/45860464/50736898-ef2d3600-11d3-11e9-861b-70eae751160d.PNG)


Bu aşama doğru gerçekleştiği durumda PHPMYADMİN Görüntüleri:

![ekran alintisi5](https://user-images.githubusercontent.com/45860464/50736912-1a178a00-11d4-11e9-93fd-a1d6172e0cff.PNG)


Modulumun Frontend Yani kullanıcı bazlı görüntü kısmında ilk olarak veritabanına dosya yüklemek isteyen kullancının göreceği görüntü:

![ekran alintisi11](https://user-images.githubusercontent.com/45860464/50736933-6e226e80-11d4-11e9-8d98-76eb0c4e9951.PNG)
  
  
  Dosya Eklendiği takdirde;
  
  ![ekran alintisi12](https://user-images.githubusercontent.com/45860464/50736958-b8a3eb00-11d4-11e9-8200-5ad7476aa4ff.PNG)



Proje Aşamalarımdan biri olan TRANSLATİNG aşaması gerçekleştirirken \portal\vendor\kouosl\portal-dosyayonetim\messages\tr-TR
Dosyama Sayfamda görünen Bütün kelime ve cümlemlelerim;

![e](https://user-images.githubusercontent.com/45860464/50736978-205a3600-11d5-11e9-9353-baf73615705d.PNG)

Örnek olarak sayfamda bir "h" etiketinin translate karşılığını ;

![ekran alintisi4](https://user-images.githubusercontent.com/45860464/50737002-5c8d9680-11d5-11e9-8576-f1713e1c29d7.PNG)

Kullandığım sayfa düzenlerinde "USE" etiketi ile göstermek için;



![ekran alintisi3](https://user-images.githubusercontent.com/45860464/50737023-bc843d00-11d5-11e9-9631-1824f1a6493b.PNG)

