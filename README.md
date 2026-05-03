# 🌐 El Faro - Aplicación Web con PHP y MySQL

## 📌 Descripción del Proyecto

Este proyecto corresponde a la actividad de la **Semana 7 del Taller de Aplicaciones para Internet**, donde se implementa la conexión de un sitio web desarrollado previamente bajo arquitectura MVC hacia una base de datos relacional MySQL.

El objetivo principal fue transformar el sitio web "El Faro" desde una plataforma estática a una aplicación dinámica, permitiendo la gestión de información mediante almacenamiento persistente.

---

## 🎯 Objetivos de la Actividad

- Diseñar un modelo de datos relacional
- Implementar base de datos en MySQL
- Integrar PHP con base de datos mediante PDO
- Aplicar arquitectura MVC
- Desarrollar funcionalidades dinámicas en el sitio web

---

## 🧠 Modelo de Datos

Se diseñó una base de datos llamada `elfaro_db`, compuesta por las siguientes entidades:

- **Usuarios**
- **Artículos**
- **Contactos**

Cada entidad contiene atributos definidos según los requerimientos del sistema.

---

## ⚙️ Tecnologías Utilizadas

- PHP (PDO)
- MySQL
- HTML5
- CSS (Bulma)
- JavaScript
- XAMPP

---

## 🧩 Funcionalidades Implementadas

✔️ Registrar un nuevo artículo  
✔️ Mostrar uno o más artículos dinámicamente  
✔️ Registrar datos desde formulario de contacto  
✔️ Registrar usuarios con contraseña encriptada  
✔️ Listar usuarios registrados  

---

## 🏗️ Arquitectura del Proyecto

El sistema fue desarrollado bajo el patrón MVC:


app/
├── Controller/
├── Model/
├── View/

Config/
Public/


---

## 🛠️ Instalación y Ejecución

1. Clonar o descargar el repositorio

2. Copiar la carpeta en:

C:\xampp\htdocs\



3. Importar la base de datos:
- Archivo: `elfaro_db.sql`
- Usar phpMyAdmin

4. Iniciar servicios en XAMPP:
- Apache
- MySQL

5. Acceder al sistema:

http://localhost/el-faro/Public/index.php



---

## 🌐 Acceso al Sistema

El sistema se ejecuta de forma local utilizando XAMPP.

---

## 📁 Anexos

El repositorio incluye:

- Código fuente completo
- Base de datos (`elfaro_db.sql`)
- Recursos multimedia
- Estructura MVC completa

---

## 👨‍💻 Integrantes

- Álvaro Brizuela  
- Viviana Catrín Sáez  
- Jocelyn González  
- Enrique Ahumada Ortiz  

---

## 📚 Referencias

- Material de estudio AIEP Semana 7  
- Documentación oficial de PHP (PDO)  
- Documentación de MySQL  
- Framework Bulma CSS  


