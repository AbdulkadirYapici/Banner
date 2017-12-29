# sample
Kocaeli university open source lab yii2 Banner module

Projemde http://kouosl-app.dev/Banner kısmı frontend indexi olarak kullanılmaktadır.
Kendi modülüme ait olan frontend ise http://kouosl-app.dev/Banner/banners URL'inde bulunmaktadır.
Kendi modülüme ait olan frontend kısmında beklenilen resim gösterme hariç, diğer işlemler bulunmaktadır. 
Yani, backend'den oluşturulan tablo ekranda görülebilmektedir. 
Resime de istenilirse ekranda gösterilen linkten ulaşılabilmektedir. Sadece ekranda direk olarak resim görülememektedir. 

Projemde http://kouosl-app.dev/admin/Banner kısmı backend indexi olarak kullanılmaktadır.
Kendi modülüme ait olan backend ise http://kouosl-app.dev/admin/Banner/banners URL'inde bulunmaktadır.
Kendi modülüme ait olan backend kısmında beklenilen 5 adımdan 5'i gerçekleştirilebilmektedir(Ekleme, silme, güncelleme,arama ve girilen verileri gösterme mevcut.)
Projemde migration işlemini (migrations klasöründe) yapamadığımdan dolayı, projemin bağlı olduğu "app" isimli database'i kendi veritabanınıza eklemeniz gerekebilir.
Bu database'i proje klasörümde "MyDatabase" içerisinde bulabilirsiniz.