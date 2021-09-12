# Como utilizar SSHFS

SSHFS es una herramienta que nos permite montar localmente e interactuar con directorios que estan en un servidor a través del protocolo SFTP.

Esto permitirá editar los archivos remotos utilizando el editor de texto que tengas instalado en tu computador (como *VSCode, Sublime Text, Vim, etc...*). Tambien evita el tener que manualmente subir los archivos al terminar la edición.

## Instalación

### Ubuntu/Debian
```
sudo apt install sshfs
```
### Windows
Hay que instalar estos dos programas
[sshfs-win](https://github.com/billziss-gh/sshfs-win/releases/tag/v3.5.20357)
[winfsp](https://github.com/billziss-gh/winfsp/releases/tag/v1.2POST1)

## Montar directorio remoto
Una vez instalado debemos conectarnos a el servidor y asignarle una carpeta
### Ubuntu/Debian
```
sshfs grupo[numero]@codd.ing.puc.cl:/home/grupo[numero]/ [directorio local]
```
donde ```[numero]``` corresponde al numero de tu grupo y ```[directorio local]``` el directorio a la carpeta donde lo quieres montar.
### Windows
Este comando montara el directorio remoto en un disco virtual ```S:```
	```
	net use S: \sshfs\grupo[numero]@codd.ing.puc.cl
	```
	donde ```[numero]``` corresponde al numero de tu grupo.
