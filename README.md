# PROA Nadadores — Demo

Sitio demo de PROA Nadadores construido sobre los principios y módulos reutilizables de **Hache-Base**.

## Estado

Frontend público implementado como sitio estático para **GitHub Pages**.

El backend, persistencia, autenticación y administración real se incorporarán posteriormente al migrar el proyecto al VPS.

## Entorno de demo

- Host previsto: `https://proa.hacheinteractive.com`
- Zona horaria: `America/Cancun`
- Estado SEO inicial: demo/no indexable hasta validación de contenido y datos oficiales.
- Fuente estática de Pages: `site/`
- Logo oficial usado por el build: `public/assets/PROA-logo.webp`

## Principios

- Reutilizar Hache-Base antes de crear soluciones nuevas.
- Separar superficie pública, administración, aplicación, dominio e infraestructura.
- Mantener configuración y secretos fuera del código sensible.
- No inventar datos operativos de PROA.
- Natación artística: presencia secundaria.
- No incluir referencias a Lagos del Sol.
- Redes sociales: configurables desde administración; durante el demo se usan placeholders de Hache Interactive.

## Estructura

- `site/` — frontend estático publicado en GitHub Pages.
- `public/` — futura superficie PHP/VPS y activos compartidos.
- `app/` — bootstrap de aplicación.
- `config/` — configuración no sensible y valores por defecto.
- `src/Application/` — casos de uso/controladores de aplicación.
- `src/Domain/` — reglas de negocio PROA.
- `src/Infrastructure/` — persistencia e integraciones.
- `templates/` — layout y parciales reutilizables para la etapa VPS.
- `docs/` — perfil, arquitectura y decisiones del proyecto.

## Publicación

`.github/workflows/pages.yml` copia el logo real de PROA al artefacto estático y despliega `site/` mediante GitHub Pages cuando cambia `main`.

## Próximo paso

Validar visualmente el demo y, una vez aprobado, migrarlo al VPS conservando el frontend y conectando backend, Admin y datos dinámicos sobre la arquitectura ya preparada.
