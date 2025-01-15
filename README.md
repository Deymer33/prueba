deimer

Introducción

El proyecto está diseñado para registrar, unificar y analizar información sobre ataques cibernéticos en países latinoamericanos y España. Este sistema busca proporcionar estadísticas detalladas, visualizaciones y herramientas de búsqueda avanzadas, orientadas principalmente a investigadores y estudiantes de ciberseguridad.

Flujo del Sistema y Módulos Principales

Flujo General del Sistema

Inicio de Sesión y Autenticación

El administrador inicia sesión en el sistema mediante credenciales verificadas.

Autenticación mediante un middleware que verifica los permisos del usuario.

Panel de Control

El administrador accede al panel principal donde se resumen las estadísticas generales de ataques cibernéticos.

Acceso a las diferentes funcionalidades del sistema mediante un menú de navegación lateral.

Registro de Ataques

Permite al administrador ingresar manualmente los detalles de nuevos ataques cibernéticos.

Validación de datos antes de almacenar la información en la base de datos.

Consulta de Estadísticas

Usuarios pueden filtrar información basada en países, fechas, tipos de ataque, entre otros.

Visualización mediante gráficos interactivos.

Búsqueda Avanzada

Herramienta para buscar ataques específicos utilizando filtros como nombre, fecha, tipo de ataque, etc.

Web Scraping Automático

Un sistema automatizado realiza scraping de páginas seleccionadas para recolectar nuevos casos de ataques cada dos días.

Almacena los datos en una base de datos temporal para revisión y depuración manual.

Exportación de Datos

Los usuarios pueden generar reportes en formatos PDF o CSV de las estadísticas o información específica.

Configuración del Sistema

Módulo para que el administrador ajuste parámetros como sitios web para web scraping, filtros predeterminados, etc.

Módulos Principales

1. Autenticación y Gestión de Usuarios

Funcionalidades:

Inicio de sesión seguro con Laravel Authentication.

Control de acceso basado en roles.

2. Registro de Ataques

Datos requeridos:

País

Fecha del ataque

Tipo de ataque

Autor (si se conoce)

Víctimas

Data Leak (si ocurrió)

Estado del software (en venta o no)

Archivo involucrado

Validación de datos y confirmación del registro.

3. Estadísticas y Visualización

Funcionalidades:

Gráficos avanzados como:

Barras apiladas (ataques por país y tipo).

Líneas (evolución de ataques por fecha).

Comparación entre países o regiones.

Personalización de estadísticas según filtros específicos.

4. Búsqueda y Filtrado

Herramienta de búsqueda avanzada para encontrar ataques específicos.

Posibilidad de combinar múltiples filtros (país, tipo de ataque, fecha, etc.).

5. Web Scraping

Funcionalidades:

Programación automática cada 2 días.

Páginas seleccionadas para recolección de datos sobre ataques.

Almacenamiento en base de datos temporal para revisión.

6. Sección de Noticias

Muestra las noticias relevantes sobre ciberseguridad en Latinoamérica y España.

Fuentes enlazadas para mayor detalle.

7. Exportación de Información

Permite a los usuarios descargar datos o reportes personalizados en formatos PDF o CSV.

8. Configuración del Sistema

Opciones para:

Ajustar parámetros de scraping.

Gestionar filtros predeterminados.

Modificar configuraciones generales.


flowchart TD
    A[Inicio de Sesión] --> B[Panel de Control]
    B --> C[Registro de Ataques]
    B --> D[Consulta de Estadísticas]
    B --> E[Búsqueda Avanzada]
    B --> F[Web Scraping Automático]
    B --> G[Exportación de Datos]
    B --> H[Configuración del Sistema]
    F --> I[Base de Datos Temporal]
    I -->|Depuración| C
