# Arquitectura inicial — PROA Nadadores

Adaptación del patrón de Hache-Base al demo de PROA.

## Capas

### Interfaz
- `public/` contiene el sitio público y el acceso al panel.
- `templates/` contiene layout y parciales.

### Aplicación
- `app/` inicializa configuración y utilidades comunes.
- `src/Application/` alojará casos de uso y coordinación entre interfaz y dominio.

### Dominio
- `src/Domain/` alojará reglas propias de PROA: programas, atletas, logros, noticias y configuración editorial.

### Infraestructura
- `src/Infrastructure/` alojará persistencia e integraciones cuando se activen.

## Decisiones de bootstrap

- No se incorpora base de datos todavía.
- No se crea autenticación ficticia: el admin es solo esqueleto hasta implementar seguridad/roles.
- Las redes tienen defaults de demostración, pero el diseño prevé que luego provengan de configuración persistida editable desde Admin.
- El demo arranca no indexable y se habilitará SEO público solo al validar marca, datos y contenido.
- Las páginas públicas se crean como rutas simples y rastreables, listas para completar contenido.

## Próxima evolución

1. Identidad visual y componentes.
2. Modelo de contenido.
3. Persistencia de configuración y contenido administrable.
4. Autenticación, roles, CSRF y auditoría antes de permitir mutaciones.
5. SEO técnico completo y sitemap canónico antes de producción real.
