#!/bin/bash

# Cambiar permisos
chown -R 999:999 /var/lib/mysql

# Iniciar el contenedor MySQL
exec "$@"
