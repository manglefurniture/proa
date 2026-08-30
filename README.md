# PROA Nadadores — Demo

Sitio demo de PROA Nadadores construido sobre los principios y módulos reutilizables de **Hache-Base**.

## Estado

Bootstrap inicial del proyecto.

## Entorno de demo

- Host previsto: `https://proa.hacheinteractive.com`
- Zona horaria: `America/Cancun`
- Estado SEO inicial: demo/no indexable hasta validación de contenido y datos oficiales.

## Principios

- Reutilizar Hache-Base antes de crear soluciones nuevas.
- Separar superficie pública, administración, aplicación, dominio e infraestructura.
- Mantener configuración y secretos fuera del código sensible.
- No inventar datos operativos de PROA.
- Natación artística: presencia secundaria.
- No incluir referencias a Lagos del Sol.
- Redes sociales: configurables desde administración; durante el demo se usan placeholders de Hache Interactive.

## Estructura

- `public/` — sitio público y entrada al admin.
- `app/` — bootstrap de aplicación.
- `config/` — configuración no sensible y valores por defecto.
- `src/Application/` — casos de uso/controladores de aplicación.
- `src/Domain/` — reglas de negocio PROA.
- `src/Infrastructure/` — persistencia e integraciones.
- `templates/` — layout y parciales reutilizables.
- `docs/` — perfil, arquitectura y decisiones del proyecto.

## Próximo paso

Construir identidad visual, contenido y módulos funcionales sobre esta base, manteniendo cada cambio pequeño y trazable.
