---
description: >-
  En esta pagina se explica como limitar los minetype de los archivos que son
  subidos al sistema
---

# Permitiendo algunos tipos de archivos a media manager

### Archivos involucrado: 

project\config\voyager.php

Paso 1 editar el array de minetype:world:

{% code title="config\\voyager.php" %}
```bash
#creca de la linea 225
'media' => [
        // The allowed mimetypes to be uploaded through the media-manager.
        //'allowed_mimetypes' => '*', //All types can be uploaded
        'allowed_mimetypes' => [
          'image/jpeg',
          'image/png',
          'image/bmp',
          'application/pdf',
          'application/msword',
        ],
        //Path for media-manager. Relative to the filesystem.
        'path'                => '/',
        'show_folders'        => true,
        'allow_upload'        => true,
        'allow_move'          => true,
        'allow_delete'        => true,
        'allow_create_folder' => true,
        'allow_rename'        => true,
        /*'watermark'           => [
            'source'         => 'watermark.png',
            'position'       => 'bottom-left',
            'x'              => 0,
            'y'              => 0,
            'size'           => 15,
       ],
       'thumbnails'          => [
           [
                'type'  => 'fit',
                'name'  => 'fit-500',
                'width' => 500,
                'height'=> 500
           ],
       ]*/
    ],

```
{% endcode %}



