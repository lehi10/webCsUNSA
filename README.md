# Despliegue local de WEB CS

---

Pagina web de C.C para la ***semana de la Computación***

## Comenzando **🚀**

---

### **Pre-requisitos 📋**

[Git](https://git-scm.com/)

[Docker](https://www.docker.com/)

[VsCode](https://code.visualstudio.com/)

### Plugins de VsCode 🤖

[Container-Remote](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers)

### **Instalación 🔧**

1. Clonaremos el proyecto en tu entorno local
    
    ```bash
    git clone https://github.com/alrus2797/webCsUNSA
    ```
    
2.  Abriremos vscode
    
    ```bash
    code webCsUnsa
    ```
    
    o también 
    
    ```bash
    cd webCsUnsa && code .
    ```
    
3. Abrir ***.devcontainer***
    - Nota
        
        Solo si tienes php instalado podrías saltar el *paso c* pero podrías tener error al intentar instalar a falta de una extensión **gd** de **php**, solución [aquí](https://www.codegrepper.com/code-examples/shell/Package+%27php-gd%27+has+no+installation+candidate).  Psdt: En el .devcontainer ya viene instalado por defecto.
        
    1. Utiliza el atajo de teclado *Ctrl+shitt+P y coloca en la barra **">Remote-Containers:">Remote-Containers:Reopen in Container"***
    2. Da click en
        
        ![Untitled](Despliegue%20local%20de%20WEB%20CS%209ffd3e4f6d434ba29f118888022bb9fd/Untitled.png)
        
        y selecciona la opcion  ***"Reopen in Container"***
        
4. Instalar dependencias y migraciones de la base de datos
    1. 
        
        ```bash
        composer install && composer migrate
        ```
        
    2. 
        
        ```bash
        composer install
        ```
        
        ```bash
        composer migrate
        ```
        
5. Cerramos .devcontainer y abrimos vscode. Por ultimo, lanzamos el proyecto en entorno local
    
    ```bash
    ./vendor/bin/sail up
    ```
    
6. Happy coding 🍻
    
    ```bash
    localhost:80
    ```
    

## **Construido con 🛠️**

---

- Laravel - Framework de PHP, para crear aplicaciones para backend como frontend
- Vue.js - Framework de javascript para maquetado y diseño frontend
- Docker - Es una plataforma creada con el fin de desarrollar, implementar y ejecutar **aplicaciones dentro de contenedores.**

## **Autores ✒️**

---

- Luis Alberto Ccalluchi Lopez - *Documentación y desarrollo* - [cheems-dev](https://github.com/cheems-dev)

## **Licencia 📄**

---

Este proyecto está bajo la Licencia MIT

## **Expresiones de Gratitud 🎁**

- Comenta a otros sobre este proyecto 📢
- Invita una cerveza 🍺 o un café ☕ a alguien del equipo.
- Da las gracias públicamente 🤓.