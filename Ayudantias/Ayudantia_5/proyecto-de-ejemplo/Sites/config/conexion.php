<?php

// Este proyecto de PHP utiliza 1 sola base de datos
// Para tener 2 a la vez puedes guiarte con la wiki:
// https://github.com/IIC2413/Syllabus-2021-2/wiki/Conexi%C3%B3n-a-m%C3%BAltiples-bases-de-datos-de-PSQL-a-trav%C3%A9s-de-PHP

$DB = new PDO(
  "pgsql:dbname=$databaseName1;host=localhost;port=5432;user=$user1;password=$password1"
);
