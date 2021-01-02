---
description: En esta pagina se describe como cambiar el color del sibebar
---

# Cambiar el oclor del sidebar de la izquierda

## Archivos que seran editados

1. tcg\voyager\views\dashboard\sidebar.blade.php
2. voyager/publishable/assets/css/app.css
3. voyager\resources\assets\sass\app.scss

Becoming a super hero is a fairly straight forward process:

{% code title="sidebar.blade.php" %}
```
//linea 2
<nav class="navbar navbar-default" role="navigation" style="background-color:#F4F0F0">
```
{% endcode %}

En el segundo archivo se puede editar y se reflejan los cambios en el navegador. Aunque de todas maneras, cuando se vuelva a compilar el css se perderán estos cambios, no obstante son útil para ir viendo como queda el color del sidebar. En el archivo: "voyager/publishable/assets/css/app.css" buscar el string " .side-menu.sidebar-inverse{background: " . Luego editar sus valores

En el tercer archivo se debe modificar la linea 4528: 

{% code title="app.scss" %}
```
//linea 4528
background: linear-gradient(45deg,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.35) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
```
{% endcode %}

Para que este cambio tenga efecto se de compilar este archivo scss a css, mediante los comandos de npm definidos, en este caso npm run dev y luego actualizar el navegador.

