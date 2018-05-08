Langkah-langkahnya:

1. buat repository di github.com
2. upload data (project) ke github.com
    a. git init (di project folder)
    b. git add .
    c. git commit -m "komentar init"
    d. git remote add origin https://github.com/tamami-phb/project-harga-barang.git
    e. git push -u origin master
3. buat akun di travis-ci.org (otomatis, link ke github)
4. centang repository kita di travis-ci.org
5. buat file .travis.yml
6. install composer -> getcomposer.org
7. buat file composer.json
8. ketik perintah php composer.phar install 
9. buat file phpunit.xml
