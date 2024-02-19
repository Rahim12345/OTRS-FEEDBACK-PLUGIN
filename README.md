<p align="center"><a href="https://rs-code.az" target="_blank"><img src="https://rs-code.az/img/rs-code.png" width="300" alt="ADPU Logo"></a></p>

## OTRS FEEDBACK PLUGIN

OTRS FEEDBACK PLUGIN - OTRS sisteminə yazılmış əlavədir. Belə ki, bu plugin vasitəsi ilə, uğurla bağlanılmış ticket sahiblərinə avtomatik mail göndərilir və bu maildə xidməti qiymətləndirməyə dəvət link göndərilir ki, müştəri xidməti qiymətləndirsin.Plugini aktivləşdirmək üçün aşağıdakı addımları izləyin:

1. OTRS FEEDBACK PLUGIN -i lazım olan direktoriyaya yerləşdirmək.
2. `composer install` əmrini çalışdırmaq.
3. `cp .env.example .env` əmrini çalışdırmaq.
4. `php artisan key:generate` əmrini çalışdırmaq.
5. `.env` faylında `DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=feedback
   DB_USERNAME=root
   DB_PASSWORD=` database parametlərini otrs db-sinə konfiqrasiya etmək.
6. `php artisan migrate` əmrini çalışdırmaq.
7. `php artisan db:seed` əmrini çalışdırmaq.
8. `php artisan feedback:run` əmrini çalışdırmaq.


## Lisenziya

OTRS FEEDBACK PLUGIN [MIT lisenziyası](https://opensource.org/licenses/MIT) əsasında lisenziyalaşdırılmış açıq mənbəli proqram təminatıdır.
