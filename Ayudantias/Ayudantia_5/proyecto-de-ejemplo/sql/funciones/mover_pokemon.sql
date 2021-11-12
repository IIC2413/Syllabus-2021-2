CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
mover_pokemon()

-- declaramos lo que retorna, en este caso un booleano
RETURNS void AS $$

-- declaramos las variables a utilizar
DECLARE

tupla RECORD;

-- RECORD es un tipo (en realidad placeholder) que permite almacenar filas
-- más información sobre variables en https://www.postgresql.org/docs/9.1/plpgsql-declarations.html

-- definimos nuestra función
BEGIN

    FOR tupla IN (SELECT * FROM dblink('dbname=grupo158e3 user=grupo158 password=letmein port=5432','SELECT * FROM poke2') AS f(id2 int, name2 varchar, type_2 varchar, total2 int, hp2 int, attack2 int, defense2 int, sp_atk2 int, sp_def2 int, speed2 int, legendary2 bool))

    LOOP
        IF tupla.attack2 > 100 THEN
            INSERT INTO poke1 values(tupla.id2, tupla.name2, tupla.type_2, tupla.total2, tupla.hp2, tupla.attack2, tupla.defense2, tupla.sp_atk2, tupla.sp_def2, tupla.speed2, True);
        ELSE
            INSERT INTO poke1 values(tupla.id2, tupla.name2, tupla.type_2, tupla.total2, tupla.hp2, tupla.attack2, tupla.defense2, tupla.sp_atk2, tupla.sp_def2, tupla.speed2, tupla.legendary2);
        END IF;
    END LOOP;


-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql
