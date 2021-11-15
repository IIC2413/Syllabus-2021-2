## Algunos sitios que pueden resultar útiles para la entrega:

- [grupos Entrega3](https://docs.google.com/spreadsheets/d/1MaOi8T5Pa88aRkJl5znFnGuNiJIV5IrGkH2tPBYgQp4/edit?usp=sharing)
- [Wiki del curso](https://github.com/IIC2413/Syllabus-2021-2/wiki)
- [Documentación de procedimientos almacenados](https://www.postgresql.org/docs/10/sql-createfunction.html)

# Rúbrica Entrega 3

## Puntaje Total (70 pts):

Los puntajes asignados son los siguientes:
* **(15 pts) Usuarios y Login**
    * **(3 pts) Registro de nuevos usuarios:** Se espera que un usuario sea capaz de registrarse en la aplicación y que esta logre verificar que el email ingresado sea único y que, en el caso debe mostrar un error.
    * **(2 pts) Cambio de contraseña:** Se espera que un usuario sea capaz de cambiar su contraseña para lo cual debe ingresar su contraseña anterior y su nueva contraseña
    * **(3 pts) Login:** Se espera que todo usuario sea capaz de logearse a la aplicación utilizando su email y su contraseña. Para esto se espera además que en el informe se indique la contraseña de todos los usuarios o el criterio utilizado para esto.
    * **(7 pts total) Importación de usuarios:** Se entrega 1 archivo en el que se encuentre el procedimiento almacenado o la función de php utilizada para la importación de usuarios y asignación de contraseñas. más específicamente debe cumplir con los siguientes requisitos:
        - **(1 pto)** Tipo de archivo correspondiente al indicado
        - **(2 pts)** Debe poder mover a los usuarios de una base de datos a otra y verificar si es que el usuario ya existe en la base de datos del grupo impar.
        - **(2 pts)** Debe dar a los usuarios existentes en la base de datos de los grupos impares una contraseña aleatoria.
        - **(2 pts)** Debe modificar la contraseña de los usuarios importados según los criterios solicitados

* **(12 pts) Información personal:**
    * **(3 pts) Información general:** Se espera que el usuario pueda acceder a su información personal.
    * **(3 pts) Historial de compras:** Se espera que el usuario pueda acceder a un listado de subscripciones activas a juegos y a servicios de streaming(puede ser cada una en una sección separada de la vista) y que estas se encuentren ordenadas por fecha.
    * **(3 pts) Información respectiva al uso del usuario:** Se espera que los usuarios sean capaces de de ver sus horas gastadas viendo contenido o jugando.
    * **(3 pts) Información de pago:** Se espera que sean capaces de importar la información de pago de los usuarios utilizando php o procedimientos almacenados(no es necesario incluir una vista pero esta información debe estar si o si en las bases de datos).


* **(18 pts) Navegación**
    * **(15 pts) Página de subscripciones:**
        * **(2 pts) Vista principal** Se espera que el usuario pueda acceder a una vista general de todos los proveedores de streaming y que al hacer click en uno en particular, se muestre aquello explicado por el enunciado.
        * **(1 pto) página principal donde se muestre valor de subscripción y cantidad de películas y series incluidas en el plan de subscripción**
        * **(6 pts) Funcionalidad de películas y series más vistas**
        * **(6 pts) Funcionalidad de búsqueda de películas o series**
    * **(3 pts) Página de one time purchase**
        * **(2 pts) Vista principal** Se espera que el usuario pueda acceder a una vista general de todas las películas o juegos a comprar fuera de un plan de subscripción. Dentro de esta vista ellos pueden seleccionar uno de los elementos que aparecen y con ello acceder a una página con lo solicitado.
        * **(1 pto) página principal donde muestre los detalles del contenido y los precios según los distintos proveedores que lo ofrecen.**
        * **Función de compra:** puntaje a detallar en apartado de procedimiento almacenado. Notar que las verificaciones deben ser realizadas en el procedimiento almacenado y no en la vista.

* **(20 pts) Procedimiento Almacenado:** 
    * **(8 pts) Definición de archivos**: Se entrega uno o más archivos con la extensión `.sql` los cuales definen un procedimiento almacenado utilizando `plpgSQL` y cumple con todas las funcionalidades solicitadas por el enunciado. Notar que el puntaje de este apartado es por logro.
    * **(12 pts) Funcionamiento web**: Se requiere que el input solicitado en este apartado cumpla con lo pedido por el enunciado, que se llame correctamente al procedimiento almacenado, que se despliegue y guarde correctamente la información de la compra generada. Notar que el puntaje de este apartado se divide en puntaje por implentación previa al procedimiento y puntaje por implementación posterior al procedimiento (este último depende de que el procedimiento funcione correctamente).

* **(5 pts) Funcionalidad Adicional** Se debe añadir una funcionalidad adicional que logre dar realmente valor a la aplicación (no, los _rickrolls_ y otros _easter egg_ no garantizan puntaje en este apartado)

## Bonus
* **(hasta 5 décimas) Por navegación sobresaliente***

*Una navegación sobresaliente es aquella donde es fácil loguearse, deloguearse, ir a mi perfil, acceder a las páginas importantes de lasdistintas entidades, volver a la página principal, etc. En resumen, poder hacer todas las acciones de forma **intuitiva** sin nunca tener que escribir la URL a mano en el navegador.

## Descuentos
A continuación los descuentos que se muestran hacen referencia a **puntos finales de la nota**, es decir, un descuetno de un punto implicaría que, si obtienen un 7, su nota final sería un 6.
* (1 pto) Por subir en carpeta incorrecta.
* (2 pts) Si es que se importa una base de datos completa de un grupo impar a un grupo par y viceversa.
* (Hasta 1 pto) A juicio del corrector, por trabajos que no estén bien explicados, que cuenten con demasiadas faltas de ortografì o que se dificulte la corrección. Por ejemplo, en el caso de que no entreguen las contraseñas de los usuarios o que no implementen algo de lo solicitado por el enunciado y no lo mencionen en el reporte.
* Los ayudantes adicionalmente nos reservamos el derecho a realizar descuentos en el caso de no entregar algo que haya sido solicitado por el enunciado, para evitar esto recuerden revisar bien la sección de detalles adicionales encontrada en el mismo.
