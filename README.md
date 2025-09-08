# UARGFlow

Sistema académico desarrollado en **PHP** con base de datos **MySQL**, pensado para gestionar procesos académicos y administrativos de la **UARG**.  

---

## 🚀 Instalación

### Requisitos previos
- [Apache](https://httpd.apache.org/) (probado en versiones compatibles con XAMPP/LAMPP)
- [PHP](https://www.php.net/) (versión recomendada: 7.4 o superior)
- [MySQL](https://www.mysql.com/) (se requiere base de datos activa)
- [XAMPP](https://www.apachefriends.org/) o [LAMPP](https://www.apachefriends.org/) (recomendado para simplificar la instalación)

### Pasos de instalación
1. **Clonar o copiar el proyecto** en la carpeta del servidor:
   ```bash
   /opt/lampp/htdocs/uargflow
   ```
   o en Windows:
   ```bash
   C:\\xampp\\htdocs\\uargflow
   ```

2. **Configurar Apache y MySQL**:
   - Verificar que Apache esté instalado y activo:
     ```bash
     apachectl -v
     ```
   - Verificar versión de PHP:
     ```bash
     php -v
     ```

3. **Levantar los servicios**:
   - En Linux:  
     ```bash
     sudo /opt/lampp/lampp start
     ```
   - En Windows: iniciar Apache y MySQL desde el panel de control de **XAMPP**.

4. **Configurar MySQL**:
   - Crear la base de datos correspondiente (el sistema funciona inicialmente sin clave para el usuario de MySQL).
   - Ajustar puertos si es necesario para evitar conflictos con otras instalaciones previas.

5. **Acceso al sistema**:
   - Abrir en el navegador:
     ```
     http://localhost/uargflow
     ```

---

## ⚙️ Problemas conocidos
  
- El sistema no tomó correctamente los cambios relacionados con **MySQL + Gmail** debido a conexiones previas con el mismo usuario y puerto.  

---

## 📌 Notas

- Si Apache figura como activo en consola pero no enlaza desde el panel de XAMPP, detenerlo manualmente y reiniciarlo desde el panel.  
- La base de datos inicial no tiene clave por defecto. Es recomendable agregar una contraseña más adelante para entornos de producción.  

---

## 🖥️ Uso en proyectos

Este framework será utilizado por el grupo **4Bytes** como base para el desarrollo del sistema **GRCU Manager**, un proyecto orientado a la gestión académica y universitaria.  

### Imagen del framework UARGFlow
![UARGFlow Logo](./docs/img/uargflow.png)

### Imagen del proyecto GRCU Manager
![GRCU Manager Logo](./docs/img/grcu_manager.png)

---

## 👥 Autores

Proyecto desarrollado por estudiantes de la **UARG** como parte de la carrera de Informática.  

### Grupo 4BYTES
- **ALVAREZ, Abril**  
- **BUTTERFIELD, Nicolas**  
- **CARRANZA, Cristian**  
- **GAGNA, Martina**  
