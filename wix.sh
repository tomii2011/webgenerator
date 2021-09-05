#!/bin/bash
echo "ejecutando"

echo "Ingrese nombre del nuevo proyecto, luego presione la tecla enter: "
read in
       
select opcion in Vacio Estructura Ejemplo Salir
do
	case $opcion in
		"Vacio" )
				mkdir  $in
				echo "<!DOCTYPE html><html><head><title>Vacio</title></head><body>"$in"</body></html> " | cat > $in/index.php
				echo "Se creó el proyecto "$in" en Vacio "
				exit
			;;
		"Estructura" )
				mkdir  $in
				mkdir $in/css
				mkdir $in/css/user
				mkdir $in/css/user/admin
				mkdir $in/css/user/admin/img
				mkdir $in/css/user/admin/img/avatars
				mkdir $in/css/user/admin/img/avatars/buttons
				mkdir $in/css/user/admin/img/avatars/buttons/products
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets/js
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets/js/validations
				mkdir $1/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects
				mkdir $1/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php
				echo "Se creó el proyecto "$in" en Estructura "
				exit
			;;
		"Ejemplo" )
				mkdir  $in
				echo " " | cat > $in/index.php
				mkdir $in/css
				mkdir $in/css/user
				echo " " | cat > $in/css/user/estilo.css
				mkdir $in/css/user/admin
				echo " " | cat > $in/css/user/admin/estilo.css
				mkdir $in/css/user/admin/img
				mkdir $in/css/user/admin/img/avatars
				mkdir $in/css/user/admin/img/avatars/buttons
				mkdir $in/css/user/admin/img/avatars/buttons/products
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets/js
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets/js/validations
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/login.js
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/register.js
				mkdir $1/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/panels.js
				mkdir $1/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/main.tpl
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/login.tpl
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/register.tpl
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/panel.tpl
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/profile.tpl
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/crud.tpl
				mkdir $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php/create.php
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php/read.php
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php/update.php
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php/delete.php
				echo " " | cat > $in/css/user/admin/img/avatars/buttons/products/pets/js/validations/effects/tpl/php/dbconect.php
				echo "Se creó el proyecto "$in" en Ejemplo "
				exit
			;;

		"Salir" )
			exit
			;;	
	esac

done

echo "fin"
