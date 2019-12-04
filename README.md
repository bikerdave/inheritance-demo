# Inheritance demo issue

## Quickstart

Install dependencies:


```bash
composer install
```

---

Create a database with the following properties

```
Encoding: utf8mb4
Collation: utf8mb4_unicode_ci
```

Import `db.sql.gz`

---

Update `application/config/database.php`:

```bash
<?php
return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => '<XXXXX>',
            'database' => '<XXXXX>',
            'username' => '<XXXXX>',
            'password' => '<XXXXX>',
            'character_set' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],
    ],
];
```

## User credentials

```
u: admin
p: 12345678
```
