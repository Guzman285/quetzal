# 🦜 Quetzal - Sistema de Gestión Financiera Personal

Sistema desarrollado en PHP con arquitectura MVC para gestionar finanzas personales, ayudar en la planificación de pagos de deudas y control de ingresos/gastos.

## 🚀 Tecnologías

- **Backend**: PHP 8.2
- **Frontend**: Bootstrap 5, JavaScript
- **Base de Datos**: MySQL 8.0
- **Infraestructura**: Docker + Docker Compose

## 📋 Requisitos

- Docker Desktop instalado
- Git

## 🛠️ Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/Guzman285/quetzal.git
cd quetzal
```

2. Iniciar los contenedores de Docker:
```bash
docker-compose up -d
```

3. Acceder a la aplicación:
- **Aplicación**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081
  - Usuario: `root`
  - Contraseña: `root`

## 📁 Estructura del Proyecto

```
quetzal/
├── app/
│   ├── controllers/     # Controladores MVC
│   ├── models/          # Modelos de datos
│   ├── views/           # Vistas HTML
│   └── core/            # Clases core del framework
├── config/              # Configuraciones
│   └── database.php     # Configuración de BD
├── public/              # Archivos públicos
│   ├── css/
│   ├── js/
│   └── index.php        # Punto de entrada
├── database/            # Scripts SQL
└── docker-compose.yml   # Configuración Docker
```

## 🎯 Funcionalidades Planeadas

- ✅ Estructura base MVC
- ⏳ Gestión de deudas
- ⏳ Control de ingresos
- ⏳ Registro de gastos
- ⏳ Dashboard con gráficas
- ⏳ Planificación de pagos
- ⏳ Reportes financieros

## 🐳 Comandos Docker Útiles

```bash
# Ver contenedores activos
docker ps

# Detener contenedores
docker-compose down

# Ver logs
docker-compose logs -f

# Reiniciar contenedores
docker-compose restart
```

## 👨‍💻 Autor

Desarrollado por Guzman285

## 📝 Licencia

Proyecto personal de código abierto