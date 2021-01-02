---
description: >-
  En esta pagina se detalla como hacer un media manager en la cual el usuario
  pueda gestionar sus propios archivos en el servidor
---

# hacer media manager limitado

## Archivos modificados

1. 2. \impresiones\vendor\tcg\voyager\resources\views\media\index.blade.php

Primero, en el archivo 1, se deben agregar las líneas:

{% code title="VoyagerMediaController.php" %}
```
//cerca de la linea 13:
use TCG\Voyager\Models\User;
class VoyagerMediaController exten...
...
..
public function index()
    {
        // Check permission
        $this->authorize('browse_media');
        // Agregar esto: voy a preguntar por el rol del usuario para saber si es administrador o no 
        $currrentUser = User::where('id','=',Auth::user()->id)->take(1)->first();
        return Voyager::view('voyager::media.index')->with('id_role_user', $currrentUser->role_id)->with('id_user', $currrentUser->id);
    }
```
{% endcode %}

{% hint style="info" %}
En este ejemplo solamente se esta pasando a la vista los valores del id del usuario y el id de su rol. Para este caso es suficiente, de todas maneras se podrá agregar o quitar parámetros según sea el caso.
{% endhint %}

Segundo , en el archivo 2, se deben agregar las líneas:

{% code title="views\\media\\index.blade.php" %}
```bash
#cerca de la linea 13
</div>
<div class="clear"></div>
                <div id="filemanager">
                    @if($id_role_user == '1')
                    <media-manager
                        base-path="{{ config('voyager.media.path', '/') }}"
                        :show-folders="{{ config('voyager.media.show_folders', true) ? 'true' : 'false' }}"
                        :allow-upload="{{ config('voyager.media.allow_upload', true) ? 'true' : 'false' }}"
                        :allow-move="{{ config('voyager.media.allow_move', true) ? 'true' : 'false' }}"
                        :allow-delete="{{ config('voyager.media.allow_delete', true) ? 'true' : 'false' }}"
                        :allow-create-folder="{{ config('voyager.media.allow_create_folder', true) ? 'true' : 'false' }}"
                        :allow-rename="{{ config('voyager.media.allow_rename', true) ? 'true' : 'false' }}"
                        :allow-crop="{{ config('voyager.media.allow_crop', true) ? 'true' : 'false' }}"
                        :details="{{ json_encode(['thumbnails' => config('voyager.media.thumbnails', []), 'watermark' => config('voyager.media.watermark', (object)[])]) }}"
                        ></media-manager>
                    @elseif($id_role_user != '1')
                    <media-manager
                        base-path="/usuarios_files/user{{ $id_user }}"
                        :show-folders="{{ config('voyager.media.show_folders', true) ? 'true' : 'false' }}"
                        :allow-upload="{{ config('voyager.media.allow_upload', true) ? 'true' : 'false' }}"
                        :allow-move="{{ config('voyager.media.allow_move', true) ? 'true' : 'false' }}"
                        :allow-delete="{{ config('voyager.media.allow_delete', true) ? 'true' : 'false' }}"
                        :allow-create-folder="{{ config('voyager.media.allow_create_folder', true) ? 'true' : 'false' }}"
                        :allow-rename="{{ config('voyager.media.allow_rename', true) ? 'true' : 'false' }}"
                        :allow-crop="{{ config('voyager.media.allow_crop', true) ? 'true' : 'false' }}"
                        :details="{{ json_encode(['thumbnails' => config('voyager.media.thumbnails', []), 'watermark' => config('voyager.media.watermark', (object)[])]) }}"
                        ></media-manager>
                    @endif
                </div>
```
{% endcode %}

Adicionalmente se puede modificar los datos que se permiten subir desde el media manager, para realizar esto se debe ir al archivo project\config\voyager.php --&gt; luego descomentar el array con nombre: 'allowed\_mimetypes' , que se encuentra cerca de la lineal 220. Ahí mismo especificar que archivos se pueden subir y cuales no.

Luego de esto se deben correr estos comandos

```bash
php artisan config:cache
php artisan cache:clear
php artisan config:clear
```

Reiniciar el servidor, terminando el proceso php artisan serve y volver a correr, luego cerrar sesión con el usuario y volver a loguearse. Eso es suficiente para que funcione correctamente.

