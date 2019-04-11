Author: Yogesh singh
Author URL: http://makitweb.com/
Author Email: yogesh@makitweb.com
Tutorial Link: http://makitweb.com/upload-and-store-an-image-in-the-database-with-php/

Instructions -

1. Import attached images.sql in your database.
2. Update config.php file
3. Open my.ini (xampp/mysql/bin/my.ini) and modify the following variables values -
    max_allowed_packet = 128M
    innodb_log_file_size = 128M