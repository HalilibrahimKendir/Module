# CI4 Login Module

## Kurulum

1. Modülü Composer ile yükleyin:
   ```bash
   composer require yourname/ci4-login-module
   ```

2. Veritabanı tablolarını oluşturmak için migration dosyalarını çalıştırın:
   ```bash
   php spark migrate
   ```

3. Admin kullanıcısını eklemek için seeder dosyasını çalıştırın:
   ```bash
   php spark db:seed AdminSeeder
   ```

4. `app/Modules/Login/Config/config.php` dosyasını kontrol edin ve gerekli filtre yapılandırmalarını yapın.

## Kullanım

- Giriş yapmak için `/login` rotasını kullanın.
- Oturum açtıktan sonra `/dashboard` rotasına erişebilirsiniz. 