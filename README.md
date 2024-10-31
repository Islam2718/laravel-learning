<center>Laravel Learning</center>

## List of Content

- [Clone & Installation](https:#0).
- [Run Project Locally](https:#0).
- [Migration & Seeding](https:#0).
- [Cron Job / Scheduler Use](https:#0).


### Clone & Installation
    - Command: git clone https://github.com/Islam2718/laravel-learning.git 
    - Command: cd learning-laravel
    - Command: composer install
    - Command: php artisan key:generate
    - Command: php artisan serve

### Cron Job / Scheduler Use
   To run a cron job / scheduler: It has 3 steps. 
   - Making Command & Updated Generated File. 
       - Command: php artisan make:command GenerateJsonFile
       - Command: Follow $signature variable.
       - Command: Follow handle() function .
   - Set / Add to kernel Scheduler. Update - app/console/Kernel.php
   - Run scheduler. Rund Command in Terminal: php artisan schedule:work (for localhost) & php artisan schedule:run (live)


## Credit

Islam Hossain
