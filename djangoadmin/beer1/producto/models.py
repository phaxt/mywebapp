from django.db import models
from django.contrib.auth.models import User

MARCAS = [
  (1, ("Becker")),
  (2, ("Cristal")),
  (3, ("Escudo")),
  (4, ("Baltica")),
  (5, ("Kross")),
  (6, ("Kunstmann")),
  (7, ("Otra Marca")),
]

class Producto(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE, verbose_name="Nombre de usuario")
    marca = models.CharField(max_length=200, blank=True, null=False, verbose_name="Marca")
    cantidad = models.PositiveIntegerField(blank=False, null=False, default=0, verbose_name="Tamaño en cc")
    precio = models.PositiveIntegerField(blank=False, null=False, default=0, verbose_name="Precio en $")
    imagen_ref = models.FileField(upload_to='images')

    class Meta:
        verbose_name = 'Mi Producto'
        verbose_name_plural = 'Mis Productos'

    def __str__(self):
        return self.marca

class UploadImagen(models.Model):
    marca = models.ForeignKey(Producto, verbose_name="Marca")
    descripcion = models.CharField(max_length=200, blank=True, null=False, verbose_name="Descripción")
    imagen = models.FileField(upload_to='producto/media')

    class Meta:
        verbose_name = 'Administrar Marca'
        verbose_name_plural = 'Administrar Marcas'

    def __str__(self):
        return self.descripcion

class Perfil(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE, verbose_name="Nombre de usuario")
    rut = models.CharField(max_length=200, verbose_name="RUT")
    ciudad = models.CharField(max_length=200, verbose_name="Ciudad")
    direccion = models.CharField(max_length=200, verbose_name="Dirección del local")
    fecha_de_vencimiento = models.DateField(blank=True, null=True, verbose_name="Fecha de vencimiento")
