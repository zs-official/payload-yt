### 1.3 Perintah Dasar Shell
* Shell yang digunakan dalam modul ini adalah **Bash** karena paling banyak digunakan pada distro Linux. Untuk memastikan shell apa yang kalian gunakan, coba lakukan:
  ```bash
  $ echo $SHELL
  ```
* Shell memiliki perintah **internal** (built-in shell) dan perintah **eksternal**. Untuk mengecek apakah sebuah perintah termasuk internal atau eksternal, gunakan perintah `type`
  ```php
  $ type cd
  cd is a shell builtin
  $ type bash
  bash is /bin/bash
  $ type read
  read is a shell builtin 
  $ type chmod
  chmod is /bin/chmod
  ```
  * Contoh perintah **internal**: `cd, pwd, times, alias, umask, exit, logout, fg, bg, ls, mkdir, rmdir, mv, cp, rm, clear, ...`
  * Contoh perintah **eksternal**: `cat, cut, paste, chmod, lpr,...`. Beberapa perintah eksternal dapat dilihat di [Modul Pengenalan CLI](https://github.com/raldokusuma/modul-pengenalan-CLI)
