# mariadb-backup
### Php script to backup your MariaDB (MySQL) data and create a sql.gz file.

---

## Getting Started

Put `MariaDB-Backup.php` to your project.

## Usage

```sh
$ php MariaDB-Backup.php
```

After the execution is complete, it will generate a .sql.gz file in the save path you specified.

## Using Crontab

You can schedule your backup script using Linux's Crontab.

```sh
$ crontab -e
```

Backup every day at midnight

```sh
0 0 * * * php /var/www/MariaDB-Backup.php
```
